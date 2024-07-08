<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use App\Models\Slopes;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InspectionController extends Controller
{
    public function index()
    {
        $data = [
            'slopes' => Slopes::all(),
        ];
        return view('inspection.index', $data);
    }

    public function detail(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
        ];
        return view('inspection.detail', $data);
    }

    public function inspection(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'inspections' => Inspection::where('slug', $slug)->get(),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
        ];
        return view('inspection.inspection', $data);
    }

    public function maintenance()
    {
        // $data = [
        //     'slopes' => Slopes::all(),
        // ];
        return view('inspection.maintenance');
    }

    public function create_geometry(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
        ];
        return view('inspection.geometry', $data);
    }
    public function store_geometry(Request $request)
    {
        $geo = $request->all();
        unset($geo['_token']);

        $request->session()->put('inspection_geometry', $geo);

        return redirect('/inspection/characteristic/' . $request->slug);
    }
    public function create_characteristic(Request $request)
    {
        $geo = $request->session()->get('inspection_geometry');
        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
        ];

        return view('inspection.characteristic', $data);
    }
    public function store_characteristic(Request $request)
    {
        $char = $request->all();
        unset($char['_token']);

        $request->session()->put('inspection_characteristic', $char);

        return redirect('/inspection/rating/' . $request->slug);
    }

    public function create_rating(Request $request)
    {
        $geo = $request->session()->get('inspection_geometry');
        $char = $request->session()->get('inspection_characteristic');

        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
            'geometry' => $geo,
            'characteristic' => $char,
        ];

        return view('inventory.rating', $data);
    }
    public function store_rating(Request $request)
    {
        $slope = Slopes::where('slug',$request->slug)->first();
        $rat = $request->all();
        unset($rat['_token']);
        $request->session()->put('inspection_rating', $rat);

        $geometry = $request->session()->get('inspection_geometry');
        $characteristic = $request->session()->get('inspection_characteristic');
        $rating = $request->session()->get('inspection_rating');

        // Buckup System

        $im = json_decode($slope->img);
        foreach($im as $m){
            Storage::move($request->slug.'/' . $m->file, str_replace('/','',$geometry['date_of_inspection']).'_'.$request->slug.'/'. $m->file);
        }
        
        $inspection = new Inspection();
        $inspection->slope_name = $slope->slope_name;
        $inspection->slug = $slope->slug;
        $inspection->slope_type = $slope->slope_type;
        $inspection->date_of_inspection = $geometry['date_of_inspection'];
        $inspection->weather_condition = $geometry['weather_condition'];
        $inspection->geometry = $slope->geometry;
        $inspection->characteristic = $slope->characteristic;
        $inspection->rating = $slope->rating;
        $inspection->ranking = $slope->ranking;
        $inspection->img = $slope->img;
        $inspection->save();

        $img = TemporaryFile::all();
        $dir = TemporaryFile::select(['img', 'file','type'])->get();

        foreach ($img as $i) {
            Storage::move('temp/' . $i->file, $request->slug.'/'. $i->file);
            TemporaryFile::find($i->id)->delete();
        }

        if ($slope->slope_type == 'cut-type') {
            $IS = $rating['A1'] * $rating['A2'] * $rating['A3'] * $rating['A4'] * $rating['A5'] * $rating['B1'] * $rating['B2'];
            $CS = (($rating['C1'] * $rating['C2']) + ($rating['D1'] * $rating['D2'])) * $geometry['feature_height'];
        }else if($slope->slope_type == 'rock-type'){
            $IS = $rating['A1'] * $rating['A2'] * $rating['A3'] * $rating['A4'] * $rating['B1'] * $rating['B2'];
            $K = 1;
            if (isset($request['scale_of_failure'])) {
                if ($request['scale_of_failure'] === "Large") {
                    $K = 5;
                } elseif ($request['scale_of_failure'] === "Medium") {
                    $K = 3;
                } elseif ($request['scale_of_failure'] === "Small") {
                    $K = 1;
                } else {
                    $K = 1;
                }
            }
            $CS = (($rating['C1'] * $rating['C2']) + ($rating['D1'] * $rating['D2'])) * $K;
        }
        $TS = $IS * $CS;

        $ranking = [
            'IS' =>$IS,
            'CS' =>$CS,
            'TS' =>$TS,
        ];

        $slope = Slopes::where('slug', $request->slug)->firstOrFail();
        $slope->geometry = $geometry;
        $slope->characteristic = $characteristic;
        $slope->rating = $rating;
        $slope->ranking = json_encode($ranking);
        $slope->img = json_encode($dir);

        $slope->save();

        $request->session()->forget(['inspection_geometry', 'inspection_characteristic', 'inspection_rating']);
        return redirect('/inspection');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Slopes;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class InventoryController extends Controller
{
    public function index()
    {
        $data = [
            'slopes' => Slopes::all(),
            'sideA' => count(Slopes::where('side_of_road', 'A')->get()),
            'sideB' => count(Slopes::where('side_of_road', 'B')->get()),

        ];
        return view('inventory.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slope_name' => 'required|string|max:255|unique:slopes,slope_name',
            'location' => 'string|max:255',
            'sta1' => 'string|max:255',
            'sta2' => 'string|max:255',
            'latitude' => 'required|string|max:255',
            'longtitude' => 'required|string|max:255',
            'gps1' => 'nullable|string|max:255',
            'gps2' => 'nullable|string|max:255',
            'side_of_road' => 'required|string|max:255',
            'slope_type' => 'required|string|max:255',
        ]);

        $slug = Str::slug($request->slope_name);
        $slopes = new Slopes();
        $slopes->slope_name = $request->slope_name;
        $slopes->slug = $slug;
        $slopes->location = $request->location;
        $slopes->sta1 = $request->sta1;
        $slopes->sta2 = $request->sta2;
        $slopes->latitude = $request->latitude;
        $slopes->longtitude = $request->longtitude;
        $slopes->gps1 = $request->gps1;
        $slopes->gps2 = $request->gps2;
        $slopes->side_of_road = $request->side_of_road;
        $slopes->slope_type = $request->slope_type;

        $slopes->save();

        return redirect('/create/geometry/' . $slug);
    }

    public function detail(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
            'characteristic' => json_decode(Slopes::where('slug', $slug)->first()['characteristic']),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
        ];
        return view('inventory.detail', $data);
    }

    public function create_geometry(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
        ];
        return view('inventory.geometry', $data);
    }
    public function store_geometry(Request $request)
    {
        $geo = $request->all();
        unset($geo['_token']);

        $request->session()->put('geometry', $geo);

        return redirect('/create/characteristic/' . $request->slug);
    }

    public function create_characteristic(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $data = [
            'slope' => Slopes::where('slug', $geo['slug'])->first(),
        ];

        return view('inventory.characteristic', $data);
    }
    public function store_characteristic(Request $request)
    {
        $char = $request->all();
        unset($char['_token']);

        $request->session()->put('characteristic', $char);

        return redirect('/create/rating/' . $request->slug);
    }

    public function create_rating(Request $request)
    {
        $geo = $request->session()->get('geometry');
        $char = $request->session()->get('characteristic');

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
        $request->session()->put('rating', $rat);

        $geometry = $request->session()->get('geometry');
        $characteristic = $request->session()->get('characteristic');
        $rating = $request->session()->get('rating');

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

        $request->session()->forget(['geometry', 'characteristic', 'rating']);
        return redirect('/management');
    }

    public function destroy(string $slug){
        $item = Slopes::where('slug',$slug)->first();
        Storage::deleteDirectory($slug);
        $item->delete();

        return redirect('/inventory')->with('success', 'Item deleted successfully.');
    }

    public function tempUpload(Request $request)
    {
        if ($request->hasFile('plan')) {
            $img = $request->file('plan');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $plan = uniqid('plan-');
            $img->storeAs('temp/' . $plan, $img_name);
            TemporaryFile::create(
                [
                    'file' => $plan,
                    'img' => $img_name,
                    'type' => 'plan',
                ]
            );
            return $plan;
        }
        if ($request->hasFile('cross')) {
            $img = $request->file('cross');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $cross = uniqid('cross-');
            $img->storeAs('temp/' . $cross, $img_name);
            TemporaryFile::create(
                [
                    'file' => $cross,
                    'img' => $img_name,
                    'type' => 'cross',

                ]
            );
            return $cross;
        }

        if ($request->hasFile('img_slope_protection')) {
            $img = $request->file('img_slope_protection');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_slope_protection = uniqid('img_slope_protection-');
            $img->storeAs('temp/' . $img_slope_protection, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_slope_protection,
                    'img' => $img_name,
                    'type' => 'img_slope_protection',

                ]
            );
            return $img_slope_protection;
        }

        if ($request->hasFile('img_surface_drainage_provision')) {
            $img = $request->file('img_surface_drainage_provision');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_surface_drainage_provision = uniqid('img_surface_drainage_provision-');
            $img->storeAs('temp/' . $img_surface_drainage_provision, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_surface_drainage_provision,
                    'img' => $img_name,
                    'type' => 'img_surface_drainage_provision',

                ]
            );
            return $img_surface_drainage_provision;
        }
        if ($request->hasFile('img_hydrogeological_settings')) {
            $img = $request->file('img_hydrogeological_settings');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_hydrogeological_settings = uniqid('img_hydrogeological_settings-');
            $img->storeAs('temp/' . $img_hydrogeological_settings, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_hydrogeological_settings,
                    'img' => $img_name,
                    'type' => 'img_hydrogeological_settings',

                ]
            );
            return $img_hydrogeological_settings;
        }
        if ($request->hasFile('img_geological_features')) {
            $img = $request->file('img_geological_features');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_geological_features = uniqid('img_geological_features-');
            $img->storeAs('temp/' . $img_geological_features, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_geological_features,
                    'img' => $img_name,
                    'type' => 'img_geological_features',
                ]
            );
            return $img_geological_features;
        }
        if ($request->hasFile('img_signs_of_distress')) {
            $img = $request->file('img_signs_of_distress');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_signs_of_distress = uniqid('img_signs_of_distress-');
            $img->storeAs('temp/' . $img_signs_of_distress, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_signs_of_distress,
                    'img' => $img_name,
                    'type' => 'img_signs_of_distress',

                ]
            );
            return $img_signs_of_distress;
        }
        if ($request->hasFile('img_instability_after')) {
            $img = $request->file('img_instability_after');
            $img_name = Str::random(40) . '.' . $img->getClientOriginalExtension();
            $img_instability_after = uniqid('img_instability_after-');
            $img->storeAs('temp/' . $img_instability_after, $img_name);
            TemporaryFile::create(
                [
                    'file' => $img_instability_after,
                    'img' => $img_name,
                    'type' => 'img_instability_after',

                ]
            );
            return $img_instability_after;
        }
        return '';
    }
    public function tempDelete(Request $request)
    {
        $file = TemporaryFile::where('file',$request->getContent())->first();
        if (isset($file)) {
            Storage::deleteDirectory('temp/' . $file->file);
            $file->delete();
            return response('');
        }
    }
}

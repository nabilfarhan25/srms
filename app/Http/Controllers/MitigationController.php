<?php

namespace App\Http\Controllers;

use App\Models\Mitigation;
use App\Models\Slopes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MitigationController extends Controller
{
    public function index()
    {
        $data = [
            'slopes' => Slopes::all(),
            'sideA' => count(Slopes::where('side_of_road', 'A')->get()),
            'sideB' => count(Slopes::where('side_of_road', 'B')->get()),

        ];
        return view('mitigation.index', $data);
    }
    public function detail(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug',$slug)->first(),
            'mitigations' => Mitigation::where('slug',$slug)->get(),

            'img' => json_decode(Slopes::where('slug', $slug)->first()['img']),
            
        ];
        return view('mitigation.detail', $data);
    }
    public function create(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
        ];
        return view('mitigation.add', $data);
    }

    public function store(Request $request)
    {
       
        $slope = Slopes::where('slug', $request->slug)->first();

        $estimate = $request->all();
        unset($estimate['slug']);
        unset($estimate['slope_condition']);
        unset($estimate['mitigation_strategy']);

        $mitigation = new Mitigation();
        $mitigation->slope_name = $slope->slope_name;
        $mitigation->slug = $slope->slug;
        $mitigation->slope_type = $slope->slope_type;
        $mitigation->slope_condition = $request->slope_condition;
        $mitigation->mitigation_strategy = $request->mitigation_strategy;
        $mitigation->mitigation_estimate = json_encode($estimate);

        $mitigation->author = Auth::user()->name;
        $mitigation->save();

        return redirect('/mitigation/'. $request->slug);
    }
}
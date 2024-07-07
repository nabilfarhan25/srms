<?php

namespace App\Http\Controllers;

use App\Models\Slopes;
use Illuminate\Http\Request;

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
    public function create(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
        ];
        return view('mitigation.add', $data);
    }
}

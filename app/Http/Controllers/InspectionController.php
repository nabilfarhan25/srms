<?php

namespace App\Http\Controllers;

use App\Models\Slopes;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    public function index()
    {
        $data = [
            'slopes' => Slopes::all(),
        ];
        return view('inspection.index', $data);
    }

    public function detail()
    {
        // $data = [
        //     'slopes' => Slopes::all(),
        // ];
        return view('inspection.detail');
    }

    public function inspection()
    {
        // $data = [
        //     'slopes' => Slopes::all(),
        // ];
        return view('inspection.inspection');
    }

    public function maintenance()
    {
        // $data = [
        //     'slopes' => Slopes::all(),
        // ];
        return view('inspection.maintenance');
    }
}

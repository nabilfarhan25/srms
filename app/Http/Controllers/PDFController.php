<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slopes;

class PDFController extends Controller
{
    public function inventory(string $slug)
    {
        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
            'characteristic' => json_decode(Slopes::where('slug', $slug)->first()['characteristic']),
        ];
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('pdf.inventory',$data));
        $mpdf->Output();
    }

    public function rating(string $slug)
    {
        $slope = Slopes::where('slug', $slug)->first();

        $data = [
            'slope' => Slopes::where('slug', $slug)->first(),
            'geometry' => json_decode(Slopes::where('slug', $slug)->first()['geometry']),
            'characteristic' => json_decode(Slopes::where('slug', $slug)->first()['characteristic']),
            'rating' => json_decode(Slopes::where('slug', $slug)->first()['rating']),
            'ranking' => json_decode(Slopes::where('slug', $slug)->first()['ranking']),

        ];
        $mpdf = new \Mpdf\Mpdf();
        if ($slope->slope_type == 'cut-type') {
            $mpdf->WriteHTML(view('pdf.cut_rating',$data));
        }else if($slope->slope_type == 'rock-type'){
            $mpdf->WriteHTML(view('pdf.rock_rating',$data));

        }
        $mpdf->Output();
    }

}
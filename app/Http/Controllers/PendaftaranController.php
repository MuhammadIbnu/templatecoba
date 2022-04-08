<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PendaftaranController extends Controller
{
    //
    public function index(){
        $respon = Http::get('https://data.covid19.go.id/public/api/update.json');
        $data = $respon->json();
        
        // return dd;
        return view('page.index',compact('data'));
    }
}

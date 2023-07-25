<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() 
    {
        return view('home');
    }

    public function daftarPeserta()
    {
        $urlPeserta = 'http://103.226.55.159/json/data_rekrutmen.json';
        $ch = curl_init($urlPeserta);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responsePeserta = json_decode(curl_exec($ch));
        curl_close($ch);
        
        $urlAttr = "http://103.226.55.159/json/data_attribut.json";
        $ch = curl_init($urlAttr);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseAttr = json_decode(curl_exec($ch));
        curl_close($ch);

        $pesertaArray = (array) $responsePeserta;
        $attrArray = (array) $responsePeserta;
        
        return view('daftar-peserta', [
            'data_peserta' => $pesertaArray['Form Responses 1'],
            'data_attr' => $attrArray
        ]);
    }
}

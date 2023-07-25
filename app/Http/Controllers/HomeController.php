<?php

namespace App\Http\Controllers;

use App\Libs\Traits\PesertaObject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use PesertaObject;

    public function home() 
    {
        return view('home');
    }

    public function daftarPeserta()
    {

        $peserta = $this->filterAll();

        return view('peserta-index', [
            'data_peserta' => $peserta
        ]);
    }

    public function daftarPesertaShow($pesertaId)
    {
        $peserta = $this->filterAll();

        $pesertaGet = null;
        for ($i=0; $i < count($peserta); $i++) {
            if ($peserta[$i]->id == $pesertaId ) {
                $pesertaGet = $peserta[$i];
            }
        }   

        return view('peserta-show', ['peserta' => $pesertaGet]);
    }
}

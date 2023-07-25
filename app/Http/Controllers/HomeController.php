<?php

namespace App\Http\Controllers;

use App\Libs\Traits\PesertaObject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use PesertaObject;

    public function home() 
    {
        $peserta = $this->filterAll();

        $programmer = array_filter($peserta, function($item) {
            return $item->posisi_yang_dipilih == 'Programmer';
        });
        $SA = array_filter($peserta, function($item) {
            return $item->posisi_yang_dipilih == 'System / Business Analyst';
        });
        $DA = array_filter($peserta, function($item) {
            return $item->posisi_yang_dipilih == 'Database Administrator';
        });
        $QA = array_filter($peserta, function($item) {
            return $item->posisi_yang_dipilih == 'Quality Assurance';
        });
        $TW = array_filter($peserta, function($item) {
            return $item->posisi_yang_dipilih == 'Technical Writer';
        });
        
        return view('home', [
            'programmer' => count($programmer),
            'sa' => count($SA),
            'da' => count($DA),
            'tw' => count($TW),
            'qa' => count($QA),
            'is_home' => 'active'
        ]);
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

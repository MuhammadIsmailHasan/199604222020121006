<?php
namespace App\Libs\Traits;

trait PesertaObject {

    protected function pesertaApiGet()
    {
        $urlPeserta = 'http://103.226.55.159/json/data_rekrutmen.json';
        $ch = curl_init($urlPeserta);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responsePeserta = json_decode(curl_exec($ch));
        curl_close($ch);

        return $responsePeserta;
    }

    protected function attributeApiGet()
    {
        $urlAttr = "http://103.226.55.159/json/data_attribut.json";
        $ch = curl_init($urlAttr);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseAttr = json_decode(curl_exec($ch));
        curl_close($ch);

        return $responseAttr;
    }

    protected function filterAll()
    {
        $pesertaArray = (array) $this->pesertaApiGet();
        $peserta = $pesertaArray['Form Responses 1'];

        $attrArray = (array) $this->attributeApiGet();

        for ($i=0; $i < count($peserta); $i++) {
            $pesertaId = $peserta[$i]->id;
            $nilai = [];
            for ($j=0; $j < count($attrArray); $j++) {
                if ($attrArray[$j]->id_pendaftar == $pesertaId){
                    array_push($nilai, $attrArray[$j]);
                }
            }
            $peserta[$i]->nilai = $nilai;
        };

        return $peserta;
    }
}


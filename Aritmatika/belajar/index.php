<?php
    $saya = "Dr.Ratio";
    $ucapanSalam = "Halo sayang";

    cobaSalam($ucapanSalam, $saya);

    function cobaSalam($salamlengkap, $pengirim){
        echo $salamlengkap . ", saya " . $pengirim;
    }
    echo "<br>";

    function coba_luas_fungsi($p, $l){
        $luas = $p * $l;
        return $luas;
    }

    function coba_luas_prosedur($p, $l){
        echo "Luas Persegi Dengan Prosedur = " . ($p * $l);
    }

    $hasil = coba_luas_fungsi(7, 7);
    echo "Luas Persegi Dengan Fungsi = " . $hasil;
    echo "<br>";

    coba_luas_prosedur(7, 7);
    echo "<br>";

    function UmurHerta($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan ($nama, $salam="Hai Trailblazer.") {
        echo $salam. ", ";
        echo "Perkenalkan nama saya " . $nama . ".<br>";
        echo "Umur saya " . UmurHerta(1000, 2026) . " tahun.<br>";
        echo "Saya seorang pemilik Herta Space Station.<br>";
    }

    perkenalan("Herta");
?>
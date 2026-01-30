<?php
   Class CetakTeks {
        Function Teks(){
             $a = "Haloo Dunia! <br>";
             $b = "Semangat Belajar! <br>";
             $c = "Enak nya tidur gak sihhh? <br>";
             $d = "Zzzzzzz... <br>";
             echo $a.$b.$c.$d;
        }
   }
   $cetak = new CetakTeks();
   $cetak->Teks();
?>
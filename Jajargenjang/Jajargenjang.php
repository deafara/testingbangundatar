<?php
include 'bangundatar.php';
class Jajargenjang extends bangundatar{

        function hitungkeliling($a,$b){
            if ($a == '' && $b == '' ) {
                return "Tidak Boleh kosong!";
            }else{
                return (2*$a)+(2*$b);
            }
        }

        function hitungLuas($alas,$tinggi){
            if($alas == '' && $tinggi == ''){
                return "Tidak Boleh kosong!";
            }else{
                return $alas*$tinggi;
            }
        }

    }

?>
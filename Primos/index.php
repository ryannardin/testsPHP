<?php

    function Primos($inicial,$final){
        $primos=[];
        for($i = $inicial; $i < $final; $i++){
            $divisores = 0;
            for($j = $i; $j >= 1; $j--){
                if (($i % $j) == 0) 
                    $divisores++;
            } 
            if ($divisores == 2)
                $primos[]= $i;
                
        }
        $encontrados=count($primos);
        $primos=implode(',',$primos);
        echo "Encontrados {$encontrados} números primos, são eles: {$primos} ";
    }
    primos(10,29);
?>
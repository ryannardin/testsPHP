<?php
    function SeculoAno($ano)
    {
        $resto=$ano%100;
        $seculo=($ano-$resto)/100;
        if($resto>0)
            $seculo++;
        return $seculo;
    }
    echo SeculoAno(1905);
?>

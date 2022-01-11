<?php
    function sortArray($size){
        $array=[];
        for($i=0;$i<$size;$i++){
            $array[]=rand(1,10);
        }
        return $array;
    }
    function getUniqueNumbers($array)
    {
        $counts = array_count_values($array);
        $arr = array_filter($array, function ($value) use ($counts) {
            return $counts[$value] == 1;
        });
        return $arr;
    }

    $array=sortArray(20);
    $arraySort=implode(',',$array);
    $uniqueNumbersArray=getUniqueNumbers($array);
    if(count($uniqueNumbersArray)>2)
        $uniqueNumbers=implode(', ',$uniqueNumbersArray);
    else if(count($uniqueNumbersArray)==0)
        $uniqueNumbers='nenhum';
    else
        $uniqueNumbers=implode(' e ',$uniqueNumbersArray);
        
    echo "Array sorteado = [{$arraySort}]<br>
    Os números que não se repetem são: {$uniqueNumbers}. ";
    
?>
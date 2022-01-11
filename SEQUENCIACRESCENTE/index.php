<?php
    function isAscending($array){
        $isAscending=true;
        $last=null;
        foreach($array as $value){
            if($last == null)
            {
                $last=$value;
                continue;
            }
            if($last>=$value){
                $isAscending=false;
                return $isAscending;

            }
            else{
                $last=$value;
            } 
        }
        return $isAscending;
    }

    function SequenciaCrescente($array){
        $isAscending=false;
        for($i=0;$i<count($array);$i++){
            $arr=$array;
            unset($arr[$i]);
            if(isAscending($arr)){
                $isAscending=true;
                return  $isAscending;
            }
        }
        return  $isAscending;
    }


    $testArray=[
        [1, 3, 2, 1],
        [1, 3, 2],
        [1, 2, 1, 2],
        [3, 6, 5, 8, 10, 20, 15],
        [1, 1, 2, 3, 4, 4],
        [1, 4, 10, 4, 2],
        [10, 1, 2, 3, 4, 5],
        [1, 1, 1, 2, 3],
        [0, -2, 5, 6],
        [1, 2, 3, 4, 5, 3, 5, 6],
        [40, 50, 60, 10, 20, 30],
        [1, 1],
        [1, 2, 5, 3, 5],
        [1, 2, 5, 5, 5],
        [10, 1, 2, 3, 4, 5, 6, 1],
        [1, 2, 3, 4, 3, 6],
        [1, 2, 3, 4, 99, 5, 6],
        [123, -17, -5, 1, 2, 3, 12, 43, 45],
        [3, 5, 67, 98, 3]
    ];
    
    
    foreach($testArray as $test){
        $SequenciaCrescente=(SequenciaCrescente($test) ? 'true' : 'false');
       
        $array=implode(',',$test);
        echo"<br>
        [{$array}] $SequenciaCrescente
        <br>";
    }
    

    
    

?>
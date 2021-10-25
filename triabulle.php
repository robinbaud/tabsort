<?php

function sortTab() {
    $compare = 0;
    $acce = 0;
    $tableau = [9, 8, 7, 6, 5, 4, 3, 2, 1];
    for($i = 0; $i < count($tableau); $i++){
        $acce++;
        for($j = $i+1; $j < count($tableau); $j++){
            $acce++;
            if($tableau[$j] < $tableau[$i]){
                $compare++;
                $k = $tableau[$j];
                $acce += 1;
                $tableau[$j] = $tableau[$i];
                $acce += 2;
                $tableau[$i] = $k;
                $acce += 1;
            }
        }
    }
    var_dump($tableau).PHP_EOL;
    echo $compare.PHP_EOL;
    echo $acce.PHP_EOL;
}

sortTab();
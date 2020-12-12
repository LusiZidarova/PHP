<?php
$numbers = array_map('intval',explode(' ',readline()));

for($i=0;$i<count($numbers)-1;$i++){
    if($numbers[$i] == $numbers[$i+1]){
        $numbers[$i] = $numbers[$i] + $numbers[$i+1];
        array_splice($numbers,$i+1,1);
        $i=-1;
    }
}
echo implode(' ',$numbers);
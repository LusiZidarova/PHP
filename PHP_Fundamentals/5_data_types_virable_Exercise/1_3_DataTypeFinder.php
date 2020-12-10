<?php
$input = readline();
$dataType = '';
 do {
    if(filter_var($input,FILTER_VALIDATE_INT)){
        $dataType = 'Integer';
        echo $input.' is '.$dataType.' type '.PHP_EOL;
    }
    else if($input === 'true' || $input === 'false'){
        $dataType = 'Boolean';
        echo $input.' is '.$dataType.' type '.PHP_EOL;
    }else if(ctype_alpha($input)){
        $dataType = 'String';
        echo $input.' is '.$dataType.' type '.PHP_EOL;
    }else if(filter_var($input,FILTER_VALIDATE_FLOAT)){
         $dataType = 'Floating point';
         echo $input.' is '.$dataType.' type '.PHP_EOL;
    }else if(ctype_alnum($input)){
         $dataType = 'Characters'; 
         echo $input.' is '.$dataType.' type '.PHP_EOL;
    }
     $input = readline();
 }
    while ($input != "END");

/*
3. Data Type Finder

You will receive an input until you receive &quot;END&quot;. Find what data type is the input. Possible data types are:
25
25.56
Integer
Floating point
Characters
Boolean
Strings
58.589
true
END
Print the result in the following format: &quot;{input} is {data type} type&quot;
 */


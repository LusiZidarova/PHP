<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Even Numbers from 1 to N</title>

</head>
<body>
    <form method="get">
    N: <input type="text" name="num" />
    <input type="submit" value="submit" />
</form>
<?php
$num = $_GET['num'];

prime_Number($num);
function prime_Number($num){
    $arr = array();
    for ($i = 2; $i <=$num; $i++) {
        for ($j = 2; $j <=$num; $j++) {
            if($i%$j==0){
                break;
            }
        }
        if($i==$j){
           array_push($arr,$i);
        }
    } 	
    echo implode(' ',array_reverse($arr));
}
?>
</body>
</html>


<?php
/*
13.*Prime Numbers from N to 1
 * 
 *You are given a number num. Write a PHP script that prints only the prime numbers from num to 1. A prime number is a number that can be divided only by 1 and itself. 1 is not a prime number. The input comes as a parameter named num. The parameter num will hold a positive integer.
Skeleton
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<!--Write your PHP Script here-->
</body>
</html>
Examples
Parameter name	Input	Output		Input	Output
num	        10	7 5 3 2		20	19 17 13 11 7 5 3 2

 */
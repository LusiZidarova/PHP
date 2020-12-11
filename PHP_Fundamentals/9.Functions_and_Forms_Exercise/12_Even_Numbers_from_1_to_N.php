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
even_Number($num);

function even_Number($num){
    if($num>0){
        for ($i = 1; $i <= $num; $i++) {
            if($i%2===0){
                echo $i.' ';
            }
        }
    }
}
?>
</body>
</html>


<?php
/*
12.*Even Numbers from 1 to N
 * You are given a number num. Write a PHP script that loops through all of the numbers from 1 to num and prints only the even ones. The input comes as a parameter named num. The parameter num will hold a positive integer.
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
num	        5	2 4		  2	2

 */
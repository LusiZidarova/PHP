<?php
$n = intval(readline());
$p = intval(readline());

    if($p >= $n){
        echo 1;
    } else {
       $courses = (int) ($n/$p);
       $cours = (int)($n%$p); 
       
       if($cours>0){
           $cours = 1;
       }
       
      $total_courses = $courses + $cours;
      echo $total_courses;
    }

/*
3. Elevator
Calculate how many courses will be needed to elevate n persons by using an elevator of capacity of p
persons. The input holds two lines: the number of people n and the capacity p of the elevator.
Examples
Input  
17
3
Output:6 
Comments: 5 courses * 3 people
+ 1 course * 2 persons

Input
4
5
Output:1 
Comments: All the persons fit inside in the elevator.
Only one course is needed.
Input
10
5
Output:2 
Comments: 2 courses * 5 people
 */

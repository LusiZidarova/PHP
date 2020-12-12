<?php
$cources = explode(', ',readline());
$input = readline();
while ($input !=="course start" ) {
  $args = explode(':',$input);
  $command = $args[0];
  $lesson = $args[1];

  switch ($command) {
      case 'Add':
          if(!in_array($lesson, $cources)){
             $cources[]=$lesson;
             //array_push($cources,$lesson);
          }          
          break;
      case 'Insert'://Insert:{lessonTitle}:{index}
          $index = $args[2];
          if(!in_array($lesson, $cources)){
              array_splice($cources, $index, 0, $lesson);
          }          
          break;
      case 'Remove'://Remove:{lessonTitle}
            $index= array_search($lesson, $cources);
            $indexEx = array_search($lesson.'-Exercise', $cources);
            if(in_array($indexEx, $cources)){
                array_splice($cources, $index, 1);
                array_splice($cources, $indexEx, 1);
            } else {
                 array_splice($cources, $index, 1);
            }
          break;
      case 'Exercise'://Exercise:{lessonTitle} //{lessonTitle}-Exercise
          $index = array_search($lesson, $cources);
          if(in_array($lesson, $cources)){
              array_splice($cources, $index+1, 0, $lesson.'-Exercise');
          } else {
           
              array_push($cources,$lesson,$lesson.'-Exercise');
          }   
          break;    
      case 'Swap'://Swap:{lessonTitle}:{lessonTitle}
              $lessonChange = $args[2];
              swap($cources,$lesson,$lessonChange);
          break;
  }
  
   $input = readline();
}
foreach($cources as $key=>$value){
    echo ($key+1).'.'.$value.PHP_EOL;
}

function swap(array $arr,string $leson1,string $leson2){
     $index1= array_search($leson1, $arr);
     $index2 = array_search($leson2, $arr);
              
     if($index1 !==false && $index2 !== false){
         $arr[$index1] = $leson2;
          $arr[$index2] = $leson1;
     }         
     if(isset($arr[$index1+1]) && $arr[$index1+1] === $leson1.'-Exercise'){
                 
         array_splice($arr, $index1+1, 1);
         array_splice($arr, $index2+1, 0,$leson1.'-Exercise');
                
     } else if(isset($arr[$index2+1]) && $arr[$index2+1] === $leson2.'-Exercise'){
         array_splice($arr, $index2+1, 1);
         array_splice($arr, $index1+1, 0, $leson2.'-Exercise');
     }
     return $arr;
}


/*
10. *SoftUni Course Planning
 * 
You are tasked to help planning the next Programing Fundamentals course by keeping track of the lessons, that are going to be included in the course, as well as all the exercises for the lessons. 
On the first input line you will receive the initial schedule of lessons and exercises that are going to be part of the next course, separated by comma and space ", ". But before the course starts, there are some changes to be made. Until you receive "course start" you will be given some commands to modify the course schedule. The possible commands are: 
-Add:{lessonTitle} – add the lesson to the end of the schedule, if it does not exist.
-Insert:{lessonTitle}:{index} – insert the lesson to the given index, if it does not exist.
-Remove:{lessonTitle} – remove the lesson, if it exists.
-Swap:{lessonTitle}:{lessonTitle} – change the place of the two lessons, if they exist.
-Exercise:{lessonTitle} – add Exercise in the schedule right after the lesson index, if the lesson exists
 and there is no exercise already, in the following format "{lessonTitle}-Exercise". If the lesson doesn`t
exist, Add the lesson in the end of the course schedule, followed by the Exercise.
Each time you Swap or Remove a lesson, you should do the same with the Exercises, if there are any, which follow the lessons.
 * 
Input / Constraints
first line – the initial schedule lessons – strings, separated by comma and space ", "
until "course start" you will receive commands in the format described above
Output
Print the whole course schedule, each lesson on a new line with its number(index) in the schedule: 
"{lesson index}.{lessonTitle}"
Allowed working time / memory: 100ms / 16MB.
Examples

Input                           Output          Comment
Data Types, Objects, Lists      1.Arrays        We receive the initial schedule.
Add:Databases                   2.Data Types    Next, we add Databases lesson, because it doesn`t exist. 
Insert:Arrays:0                 3.Objects       We Insert at the given index lesson Arrays, because it's not present in the schedule. 
Remove:Lists                    4.Databases     After receiving the last command and removing lesson Lists, we print the whole schedule.
course start	


Input                       Output                  Comment
Arrays, Lists, Methods      1.Methods               We swap the given lessons, because both exist.
Swap:Arrays:Methods         2.Databases             After receiving the Exercise command, we see that such lesson doesn`t exist, so we add the lesson at the end, followed by the exercise.
Exercise:Databases          3.Databases-Exercise    We swap Lists and Databases lessons, the
Swap:Lists:Databases        4.Arrays                Databases-Exercise is also moved after the Databases lesson.
Insert:Arrays:0             5.Lists                 We skip the next command, because we already have such lesson in our schedule.
course start	



	




 */


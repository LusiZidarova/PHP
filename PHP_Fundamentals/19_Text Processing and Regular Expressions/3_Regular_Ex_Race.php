<?php
$list = explode(', ',readline());
$input = readline();
$raceres = [];

while($input !== 'end of race'){
     preg_match_all('/(?<name>[A-Za-z]{0,})(?<num>[0-9]{0,})/',$input,$matches);

    $name=implode('',$matches['name']);
    $num = implode('',$matches['num']);
      if(!key_exists($name,$raceres)){
          $raceres[$name] = $num;
      }else{
          $raceres[$name].=$num;
      }
    $input = readline();

}
foreach($raceres as $name => $value){
    if(in_array($name,$list)){
        $sum=0;
        for ($i=0;$i<strlen($value);$i++){
            $sum +=$value[$i];
        }
        $raceres[$name] = $sum;
    }else{
        unset($raceres[$name]);
    }
}
arsort($raceres);
$i=1;
foreach ($raceres as $racer=>$value){
    if($i == 1){
        echo '1st place: '.$racer.PHP_EOL;
    }else if($i == 2){
        echo '2nd place: '.$racer.PHP_EOL;
    }else {
        echo '3rd place: '.$racer;
    }
    $i++;
    if($i==4){
        break;
    }
}


/*
3.Race - 100%
Write a program that processes information about a race. On the first line you will be given list of participants separated by
 ", ". On the next few lines until you receive a line "end of race" you will be given some info which will be some alphanumeric
 characters. In between them you could have some extra characters which you should ignore. For example:
"G!32e%o7r#32g$235@!2e".
 The letters are the name of the person and the sum of the digits is the distance he ran. So here we have George who
ran 29 km.
Store the information about the person only if the list of racers contains the name of the person.
If you receive the same person
more than once just add the distance to his old distance. At the end print the top 3 racers ordered by distance in descending
 in the format:
"1st place: {first racer}
2nd place: {second racer}
3rd place: {third racer}"
Examples
Input	Output	Comment
George, Peter, Bill, Tom
G4e@55or%6g6!68e!!@
R1@!3a$y4456@
B5@i@#123ll
G@e54o$r6ge#
7P%et^#e5346r
T$o553m&6
end of race

Output
	1st place: George
2nd place: Peter
3rd place: Tom

Comment:
Tom	On the 3rd input line we have Ray. He is not in the list, so we do not count his result.
The other ones are valid. George has total of 55 km, Peter has 25 and Tom has 19. We do not
 print Bill because he is on 4th place.

 */
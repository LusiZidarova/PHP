<?php

class Song{

    private $typeList;
    private  $name;
    private $time;
    
    public function __construct($typeList,$name,$time) {
      $this->typeList=$typeList;
      $this->name=$name;
      $this->time=$time;
    }
    
    public function getTypeList(){
        return $this->typeList;
    }
    
    public function getName(){
        return $this->name;
    }
   
    public function getTime(){
        return $this->time;
    }
}
$n= readline();

$songs = [];

for ($i = 0; $i < $n; $i++) {
    $comand = readline();
    $fields = explode('_', $comand);
    $type = $fields[0];
    $name = $fields[1];
    $time = $fields[2];
   
    $newSong = new Song($type, $name, $time);
    $songs[]= $newSong;
}
$type = readline();

if($type == 'all') {
    foreach ($songs as $song) {
        echo $song->getName().PHP_EOL;
    }
}else {
   foreach ($songs as $song) {
        if( $song->getTypeList()== $type ){
            echo $song->getName().PHP_EOL;
        }
   }
}

   


//
/*
3.Songs
 * Define a class Song, which holds the following information about songs: Type List, Name and Time.
On the first line you will receive the number of songs - N.
On the next N-lines you will be receiving data in the following format: "{typeList}_{name}_{time}".
On the last line you will receive "{Type List}" or "all". Print only the Names of the songs which are from that
"{Type List}" or "all".
Examples
Input	
3
favourite_DownTown_3:14
favourite_Kiss_4:16
favourite_Smooth Criminal_4:01
favourite
 * 	
 * Output
 DownTown
Kiss
Smooth Criminal
 * **************************
 * Input
4
favourite_DownTown_3:14
listenLater_Andalouse_3:24
favourite_In To The Night_3:58
favourite_Live It Up_3:48
listenLater	
 * Output>
 Andalouse
 * ***********************
 * Input
2
like_Replay_3:15
ban_Photoshop_3:48
all	
 * Output
Replay
Photoshop
Solution
 * 
Define class Song with properties: Type List, Name and Time.

Create constructor and getters:

Read the input lines, make collection and store the data.

Finally read your last line – Type List and print the result.
 */
<?php
$n = intval(readline());
$parking = [];

for($i = 0; $i < $n; $i++){
    $input = explode(' ',readline());

    switch($input[0]){
        case 'register':
            $name = $input[1];
            $plateNumber = $input[2];
            if (!isset($parking[$name])) {
                $parking[$name] = $plateNumber;
                echo $name . ' registered ' . $plateNumber . ' successfully' . PHP_EOL;
            } else if (isset($parking[$name])) {
                echo "ERROR: already registered with plate number " . $plateNumber . PHP_EOL;
            }
            break;
        case 'unregister':
                $name = $input[1];
                if (isset($parking[$name])) {
                    echo $name . " unregistered successfully" . PHP_EOL;
                    unset($parking[$name]);
                } else {
                    echo 'ERROR: user ' . $name . ' not found' . PHP_EOL;
                }
            break;
        }
}
foreach ($parking as $key => $value){
    echo $key .' => '.$value.PHP_EOL;
}


/*
5.SoftUni Parking - 100%

SoftUni just got a new parking lot. It’s so fancy, it even has online parking validation. Except, the online service doesn’t work. It can only receive users’ data, but doesn’t know what to do with it. Good thing you’re on the dev team and know how to fix it, right?
Write a program, which validates parking for an online service. Users can register to park and unregister to leave.
The program receives 2 commands:
"register {username} {licensePlateNumber}":
oThe system only supports one car per user at the moment, so if a user tries to register another license plate, using the same username, the system should print:
"ERROR: already registered with plate number {licensePlateNumber}"
oIf the aforementioned checks pass successfully, the plate can be registered, so the system should print:
 "{username} registered {licensePlateNumber} successfully"
"unregister {username}":
oIf the user is not present in the database, the system should print:
"ERROR: user {username} not found"
oIf the aforementioned check passes successfully, the system should print:
"{username} unregistered successfully"
After you execute all of the commands, print all the currently registered users and their license plates in the format:
"{username} => {licensePlateNumber}"
Input
First line: n – number of commands – integer
Next n lines: commands in one of two possible formats:
oRegister: "register {username} {licensePlateNumber}"
oUnregister: "unregister {username}"
The input will always be valid and you do not need to check it explicitly.
Examples
Input	Output
5
register John CS1234JS
register George JAVA123S
register Andy AB4142CD
register Jesica VR1223EE
unregister Andy

Output
John registered CS1234JS successfully
George registered JAVA123S successfully
Andy registered AB4142CD successfully
Jesica registered VR1223EE successfully
Andy unregistered successfully
John => CS1234JS
George => JAVA123S
Jesica => VR1223EE

Input
4
register Jony AA4132BB
register Jony AA4132BB
register Linda AA9999BB
unregister Jony

Output
Jony registered AA4132BB successfully
ERROR: already registered with plate number AA4132BB
Linda registered AA9999BB successfully
Jony unregistered successfully
Linda => AA9999BB

Input
6
register Jacob MM1111XX
register Anthony AB1111XX
unregister Jacob
register Joshua DD1111XX
unregister Lily
register Samantha AA9999BB

Output
Jacob registered MM1111XX successfully
Anthony registered AB1111XX successfully
Jacob unregistered successfully
Joshua registered DD1111XX successfully
ERROR: user Lily not found
Samantha registered AA9999BB successfully
Anthony => AB1111XX
Joshua => DD1111XX
Samantha => AA9999BB
 */
<?php
$input = readline();
$users = [];
while($input !== 'Log out'){
    $commands = explode(': ',$input);
    $username = $commands[1];
    switch($commands[0]){
        case 'New follower':
            if(!key_exists($username,$users)){
                $users[$username] = array('likes'=>0,'comment'=>0);
            }
            break;
        case 'Like':
            $likes = $commands[2];

            if(!key_exists($username,$users)){
                $users[$username] = array('likes'=>$likes);
            }else{
                $users[$username]['likes']+=$likes;
            }
            break;
        case 'Comment':
            if(!key_exists($username,$users)){
                $users[$username]['comment']=1;
            }else{
                $users[$username]['comment']+=1;
            }
            break;
            //Blocked: {username}":
        //oDelete all records of the given username. If it doesn’t exist, print:
        // "{Username} doesn't exist."
        case 'Blocked':
            if(key_exists($username,$users)){
                unset($users[$username]);
            }else{
                echo $username." doesn\'t exist.".PHP_EOL;
            }
            break;
    }
    $input = readline();
}

echo count($users).' followers'.PHP_EOL;

foreach($users as $user=>$value){
    echo $user.": ".array_sum($value).PHP_EOL;
}

/*
3.Followers - Programming Fundamentals Final Exam Retake - 9 August 2019 -
Now that Pesho has successfully created an account, he wants to connect with other users and gain as many followers, likes and comments as possible.
Create a program that keeps information about Pesho's followers, likes and comments. Keep a record of the followers, each with the likes and comments Pesho has received from them.
You will be receiving lines with commands until you receive the "Log out" command.  There are four possible commands:
"New follower: {username}":
oAdd the username, to your records (with 0 likes and 0 comments). If person with the given username already exists ignore the line.
"Like: {username}: {count}":
oIf the username doesn't exist, add it to your records with the given count of likes.
oIf the username exist, increase the count of likes with the given count.
"Comment: {username}":
oIf the username doesn't exist, add it to your records with 1 comment.
oIf the username exists, increase the count of commens with 1.
"Blocked: {username}":
oDelete all records of the given username. If it doesn’t exist, print:
 "{Username} doesn't exist."

In the end, you have to print the count of followers, each follower with his/her likes and comments (the sum of likes and comments) sorted in descending order by the likes and then by their username in ascending order in the following format:
{count} followers
{username}: {likes+comments}
{username}: {likes+comments}
...
Input
You will be receiving lines until you receive the "Log out" command.
The input will always be valid.
Output
Print the users with their likes in the format described above.
Examples
Input	Output
New follower: gosho
Like: gosho: 5
Comment: gosho
New follower: gosho
New follower: tosho
Comment: gosho
Comment: tosho
Comment: pesho
Log out

Output
3 followers
gosho: 7
pesho: 1
tosho: 1


Input	Output
Like: A: 3
Comment: A
New follower: B
Blocked: A
Comment: B
Like: C: 5
Like: D: 5
Log out

Output
3 followers
C: 5
D: 5
B: 1

 */
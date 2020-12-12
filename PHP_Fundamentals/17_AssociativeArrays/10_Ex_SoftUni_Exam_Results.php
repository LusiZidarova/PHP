<?php
$users = [];
$submissions = [];
$input = readline();

while($input !== 'exam finished'){
    $args = explode('-',$input);
    $name = $args[0];
    $lang = $args[1];
    if($lang === 'banned'){
        unset($users[$name]);
    }else {
        $points = $args[2];
        if(!key_exists($name,$users)){
            $users[$name] = $points;
        }else {
            if($points > $users[$name]){
                $users[$name] = $points;
            }
        }
        if(!key_exists($lang,$submissions)){
            $submissions[$lang] = 1;
        }else {
            $submissions[$lang] ++;
        }
    }

    $input = readline();
}
ksort($users);
arsort($users);
ksort($submissions);
arsort($submissions);

echo 'Results:'.PHP_EOL;
foreach ($users as $user=>$points) {
    echo $user.' | '.$points.PHP_EOL;
}
echo 'Submissions:'.PHP_EOL;
foreach ($submissions as $lang=>$count){
    echo $lang.' - '.$count.PHP_EOL;
}


/*
10.SoftUni Exam Results - 100%
Judge statistics on the last Programing Fundamentals exam was not working correctly, so you have the task to take all the submissions and analyze them properly. You should collect all the submission and print the final results and statistics about each language that the participants submitted their solutions in.
You will be receiving lines in the following format: "{username}-{language}-{points}" until you receive "exam finished". You should store each username and his submissions and points.
You can receive a command to ban a user for cheating in the following format: "{username}-banned". In that case, you should remove the user from the contest, but preserve his submissions in the total count of submissions for each language.
After receiving "exam finished" print each of the participants, ordered descending by their max points, then by username, in the following format:
Results:
{username} | {points}
…
After that print each language, used in the exam, ordered descending by total submission count and then by language name, in the following format:
Submissions:
{language} – {submissionsCount}
…
Input / Constraints
Until you receive "exam finished" you will be receiving participant submissions in the following format: "{username}-{language}-{points}".
You can receive a ban command -> "{username}-banned"
The points of the participant will always be a valid integer in the range [0-100];
Output
Print the exam results for each participant, ordered descending by max points and then by username, in the following format:
Results:
{username} | {points}
…
After that print each language, ordered descending by total submissions and then by language name, in the following format:
Submissions:
{language} – {submissionsCount}
…
Allowed working time / memory: 100ms / 16MB.
Examples
Input	Output	Comment
Pesho-Java-84
Gosho-C#-70
Gosho-C#-84
Kiro-C#-94
exam finished
Results:
Kiro | 94
Gosho | 84
Pesho | 84
Submissions:
C# - 3
Java - 1	When receiving Gosho for second time, we keep the better result.
We order the participant descending by max points and then by name, printing only the username and the max points.
After that we print each language along with the count of submissions, ordered descending by submissions count, and then by language name.

Input
Pesho-Java-91
Gosho-C#-84
Kiro-JavaScript-90
Kiro-C#-50
Kiro-banned
exam finished
Output
Results:
Pesho | 91
Gosho | 84
Submissions:
C# - 2
Java - 1
JavaScript - 1
Kiro is banned so he is removed from the contest, but he`s submissions are still preserved in the languages submissions count.
So althou there are only 2 participants in the results, there are 4 submissions in total.

 */

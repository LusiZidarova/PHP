<?php
$key= readline();
$input = readline();
$childrens = [];
while($input !== 'end'){
    $str='';
    for ($i=0;$i<strlen($input);$i++){
        $str.=chr(ord($input[$i])-$key);
    }
    preg_match_all('/@([A-Za-z]+)[^@\-!:>]*!([GN])!/',$str,$matches);
    $name = $matches[1][0];
    $type = $matches[2][0];
    $childrens[$name] = $type;

    $input = readline();
}
foreach($childrens as $name=>$type){
    if($type == 'G'){
        echo $name.PHP_EOL;
    }
}

/*
5.Santa's Secret Helper - 100%
After the successful second Christmas, Santa needs to gather information about the behavior of children to plan the presents for next Christmas. He has a secret helper, who is sending him encrypted information. Your task is to decrypt it and create a list of the children who have been good.
You will receive an integer, which represents a key and afterwards some messages, which you must decode by subtracting the key from the value of each character. After the decryption, to be considered a valid match, a message should:
-Have a name, which starts after '@' and contains only letters from the Latin alphabet
-Have a behaviour type - "G"(good) or "N"(naughty) and must be surrounded by "!" (exclamation mark).
The order in the message should be: child’s name -> child’s behavior. They can be separated from the others by any character except: '@', '-', '!', ':' and '>'.
You will be receiving message until you are given the “end” command. Afterwards, print the names of the children, who will receive a present, each on a new line.
Input / Constraints
The first line holds n – the number which you have to subtract from the characters – integer in range [1…100];
On the next lines, you will be receiving encrypted messages.
Output
Print the names of the children, each on a new line
Examples
Input	Output	Comments
3
CNdwhamigyenumje$J$
CEreelh-nmguuejn$J$
CVwdq&gnmjkvng$Q$
end
Output
Kate
Bobbie
Comments:We receive three messages and to decrypt them we use the key:
First message has decryption key 3. So we substract from each characters code 3 and we receive:
@Kate^jfdvbkrjgb!G!
@Bobbie*kjdrrbgk!G!
@Stan#dkjghskd!N!
They are all valid and they contain a child’s name and behavior – G for good and N for naughty.
Input
3
N}eideidmk$'(mnyenmCNlpamnin$J$
ddddkkkkmvkvmCFrqqru-nvevek$J$nmgievnge
ppqmkkkmnolmnnCEhq/vkievk$Q$
yyegiivoguCYdohqwlqh/kguimhk$J$
end

Output
Kim
Connor
Valentine

Comments:
We receive four messages.
They are with key 3:
Kzbfabfajh!$%jkvbkj@Kim^jkfk!G!
aaaahhhhjshsj@Connor*ksbsbh!G!kjdfbskdb
mmnjhhhjklijkk@Ben,shfbsh!N!
vvbdffsldr@Valentine,hdrfjeh!G!
 */
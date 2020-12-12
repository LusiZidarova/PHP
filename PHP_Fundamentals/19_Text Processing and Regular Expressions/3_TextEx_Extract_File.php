<?php
/*$commands = explode('\\',readline());
$index = count($commands)-1;
$file = explode('.',$commands [$index]);

echo 'File name: '.$file[0].PHP_EOL;
echo 'File extension: '.$file[1];*/
$commands = readline();

$extension =substr($commands,strrpos($commands,'.')+1);
$index=strrpos($commands,'\\');
$file = explode('.',substr($commands,$index+1));

echo 'File name: '.$file[0].PHP_EOL;
echo 'File extension: '.$file[1];


/*
3.Extract File-80%
Write a program that reads the path to a file and subtracts the file name and its extension.
Examples
Input	Output
C:\Internal\training-internal\Template.pptx
Output
File name: Template
File extension: pptx
Input
C:\Projects\Data-Structures\LinkedList.cs
Output
File name: LinkedList
File extension: cs
 */
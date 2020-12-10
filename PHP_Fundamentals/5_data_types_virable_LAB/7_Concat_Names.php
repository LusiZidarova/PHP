<?php

$firstName = readline();
$lastName = readline();
$delimiter = readline();

echo $firstName.''.addslashes($delimiter).''.$lastName;
/*
7. Concat Names
Read two names and a delimiter. Print the names joined by the delimiter.
Examples
Input 
John
Smith
-&gt;
Output: John-&gt;Smith
 * 
Input
Jan
White
&lt;-&gt;
Output:Jan&lt;-&gt;White


Linda
Terry
Linda=&gt;Terry
 */

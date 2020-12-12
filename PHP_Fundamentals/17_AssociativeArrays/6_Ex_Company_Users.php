<?php
$input = readline();
$company = [];

while($input != 'End'){
    list($name ,$employeeId) = explode('->',$input);

    if(!isset($company[$name])){
        $company[$name] = array();
    }
    if(!in_array($employeeId,$company[$name])){
        $company[$name][]= $employeeId;
    }
    $input = readline();
}
ksort($company);
foreach($company as $companyNames=>$companyEmployees){
    echo  $companyNames.PHP_EOL;
    foreach ($companyEmployees as $employee){
        echo '-- '.$employee.PHP_EOL;
    }
}

/*
6.Company Users - 100%
Write a program which keeps information about companies and their employees.
You will receive company name and employee's id, until you receive the command "End". Add each employee to the given company. Keep in mind that a company cannot have two employees with the same id.
When you finish reading data, order the companies by the name in ascending order.
Print the company name and each employee's id in the following format:
{companyName}
-- {id1}
-- {id2}
-- {idN}
Input / Constraints
Until you receive "End", the input come in the format: "{companyName} -> {employeeId}".
The input always will be valid.
Examples
Input	Output
SoftUni -> AA12345
SoftUni -> BB12345
Microsoft -> CC12345
HP -> BB12345
End

Output
HP
-- BB12345
Microsoft
-- CC12345
SoftUni
-- AA12345
-- BB12345

Input
SoftUni -> AA12345
SoftUni -> CC12344
Lenovo -> XX23456
SoftUni -> AA12345
Movement -> DD11111
End

Output
Lenovo
-- XX23456
Movement
-- DD11111
SoftUni
-- AA12345
-- CC12344
 */
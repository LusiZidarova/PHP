<?php
spl_autoload_register();
$writer_name = $_GET??'HTML';
$writer_name.="Writer";
$article = new Article('Yoohohoho','Mark Tven',20.50);
try {
    $writer = Factory::getWriter($writer_name);
    echo $writer->write($article);
}catch (Exception $ex){
    echo "Samo Error: ".$ex->getMessage();
}

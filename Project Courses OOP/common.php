<?php

session_start();
spl_autoload_register();

$template = new \Core\Template();
$dataBinder = new \Core\DataBinder();
$dbInfo = parse_ini_file("Config/db.ini");
$pdo = new PDO($dbInfo['dsn'], $dbInfo['user'], $dbInfo['pass']);
$db = new \Database\PDODatabase($pdo);
$userRepository = new \App\Repository\UserRepository($db, $dataBinder);
$encryptionService = new \App\Service\Encryption\ArgonEncryptionService();
$userService = new \App\Service\UserService($userRepository, $encryptionService);
$userHttpHandler = new \App\Http\UserHttpHandler($template, $dataBinder, $userService);


$technologyRepository = new \App\Repository\TechnologyRepository($db);
$technologyService = new \App\Service\TechnologyService($technologyRepository);

$courseRepository = new \App\Repository\CourseRepository($db);
$courseService = new \App\Service\CourseService($courseRepository);

$courseHttpHandler = new \App\Http\CourseHttpHandler($template, $dataBinder, $technologyService, $courseService );
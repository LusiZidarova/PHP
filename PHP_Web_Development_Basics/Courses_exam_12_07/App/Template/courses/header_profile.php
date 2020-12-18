<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Exam_SoftCourses_Ресурси - Стилове.css">
</head>
<?php/** @var \App\Data\UserDTO $data */?>
<header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="create_courses.php">Create New Course</a>
            <li>
            <li>
                <a href="courses.php">Courses</a>
            <li>
            <li>
                <a >[<?=$data->getUsername();?>]</a>
            <li>
            <li>
                <a href="logout.php">Logout</a>
            <li>
        </ul>
    </nav>
</header>


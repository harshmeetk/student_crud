<?php
/**
 * Created by PhpStorm.
 * User: harshmeet
 * Date: 4/22/17
 * Time: 1:50 AM
 */
include('database.php');
$searchtype = $_GET['studentValue'];


//echo $searchValue;

$sql = "UPDATE `student_info` SET `id`='".$_GET['updateId']."',`stu_FirstName`='".$_GET['updateFirstName']."',`stu_LastName`='".$_GET['updateLastName']."',`stu_Email`='".$_GET['updateEmail']."',`stu_Grade`='".$_GET['updateGrade']."' WHERE `id`LIKE ".$_GET['updateId'];
    //"SELECT * FROM `student_info` WHERE `" . $searchtype . "` LIKE '" . $searchValue . "'";
//"SELECT * FROM `student_info` WHERE `stu_FirstName` LIKE " + $searchValue;
$statement = $db->prepare($sql);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
include('students.php');
<?php

//// * Created by PhpStorm.
//// * User: harshmeet
//// * Date: 4/21/17
//// * Time: 9:26 PM

include ('database.php');
$id = $_GET['id'];
$firstName=$_GET['firstName'];
$lastName=$_GET['lastName'];
$emailStudent=$_GET['emailStudent'];
$gradeStudent=$_GET['gradeStudent'];
$sql = 'INSERT INTO `student_info` (`id`, `stu_FirstName`, `stu_LastName`, `stu_Email`, `stu_Grade`) VALUES
                 (:id, :firstName, :lastName, :emailStudent,:gradesStudent)';

$statement = $db->prepare($sql);
$statement->bindValue(':id', $id);
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);
$statement->bindValue(':emailStudent', $emailStudent);
$statement->bindValue(':gradesStudent', $gradeStudent);



$statement->execute();
$statement->closeCursor();
include ('students.php')
?>




<?php
/**
 * Created by PhpStorm.
 * User: harshmeet
 * Date: 4/22/17
 * Time: 1:50 AM
 */
include('database.php');
$searchtype='id';
$id=$_GET['id'];
$sql = "DELETE  FROM `student_info` WHERE `" . $searchtype . "` LIKE " . $id;
//"SELECT * FROM `student_info` WHERE `stu_FirstName` LIKE " + $searchValue;

$statement = $db->prepare($sql);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
foreach ($categories as $category) : ?>
    <table style="border:1px double ">
        <tr>
            <td style="border:1px double "><?php echo $category['stu_FirstName'];


                ?></td>


            <td style="border:1px double "><?php echo $category['stu_LastName'];


                ?></td>


            <td style="border:1px double "><?php echo $category['stu_Email'];


                ?></td>
            <td>
                <form action="delete.php" method="get">
                    <input hidden name="id" type="text" value=<?php echo $category['id']?>>
                    <input type="submit">Delete
                </form>
            </td>

    </table>
<?php endforeach;
include('students.php')?>
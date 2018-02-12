<?php
/**
 * Created by PhpStorm.
 * User: harshmeet
 * Date: 4/22/17
 * Time: 1:50 AM
 */
include('database.php');
$searchtype = $_GET['studentValue'];

if ($searchtype == 'Email')
    $searchtype = 'stu_Email';
if ($searchtype == 'Last Name')
    $searchtype = 'stu_LastName';
if ($searchtype == 'First Name')
    $searchtype = 'stu_FirstName';
if ($searchtype == 'Grade')
    $searchtype = 'stu_Grade';
$searchValue = $_GET['whatyouwannasearch'];
//echo $searchValue;

$sql = "SELECT * FROM `student_info` WHERE `" . $searchtype . "` LIKE '" . $searchValue . "'";
//"SELECT * FROM `student_info` WHERE `stu_FirstName` LIKE " + $searchValue;

$statement = $db->prepare($sql);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
foreach ($categories as $category) : ?>
    <h1>Search Results...</h1>
    <table width="50%" border="1" cellpadding="3">
        <thead>
        <tr>
            <th>Student First Name</th>
            <th>Student Last Name</th>
            <th>Student Email</th>
            <th>Student Grade</th>

        </tr>
        </thead>
    <tr style="width: 50%">
        <td width="50%"><?php echo $category['stu_FirstName'];


            ?></td>


        <td width="50%"><?php echo $category['stu_LastName'];


            ?></td>


        <td width="50%"><?php echo $category['stu_Email'];


            ?></td>
        <td width="50%"><?php echo $category['stu_Grade'];


            ?></td>
    </tr>
    </table>
    <table>
        <tr>
        <td width="50%">
            <form action="delete.php" method="get">
                <input hidden name="id" type="text" value=<?php echo $category['id']?>>
                <input width="50%" type="submit">Delete this record
            </form>
        </td>
        <td width="50%">
            <form action="update.php" method="get">
                <input hidden name="updateid" type="text" value=<?php echo $category['id']?>>
                <input hidden name="updateFirstName" type="text" value=<?php echo $category['stu_FirstName']?>>
                <input hidden name="updateLastName" type="text" value=<?php echo $category['stu_LastName']?>>
                <input hidden name="updateEmail" type="text" value=<?php echo $category['stu_Email']?>>
                <input hidden name="updateGrade" type="text" value=<?php echo $category['stu_Grade']?>>
                <input type="submit">Update this record
            </form>
        </td>
        </tr>
    </table>
<?php endforeach; ?>
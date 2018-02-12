<?php
/**
 * Created by PhpStorm.
 * User: harshmeet
 * Date: 4/21/17
 * Time: 5:27 PM
 */
include('common.php');

$q = $conn->query("SELECT * FROM student_info ");
// Display the header
showHeader('Student Information');

?>

<table width="100%" border="1" cellpadding="3">
    <tr style="font-weight: bold">
        <td>Student ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email ID</td>
        <td>Grade</td>

    </tr>
    <?php
    // Now iterate over every row and display it
    while($r = $q->fetch(PDO::FETCH_ASSOC))
    {
        ?>
        <tr>
            <td><?=htmlspecialchars($r['id'])?></td>
            <td><?=htmlspecialchars($r['stu_FirstName'])?></td>
            <td><?=htmlspecialchars($r['stu_LastName'])?></td>
            <td><?=htmlspecialchars($r['stu_Email'])?></td>
            <td><?=htmlspecialchars($r['stu_Grade'])?></td>
        </tr>
        <?php
    }
    ?>
</table>
<?php
// Display footer
showFooter();
?>

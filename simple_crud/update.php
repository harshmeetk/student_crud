<?php
/**
 * Created by PhpStorm.
 * User: harshmeet
 * Date: 4/22/17
 * Time: 3:24 AM
 */

?>
<h1>Update Student Information Here</h1>
<form action="updateRecord.php" method="get">
    <input hidden name="updateId"type="text" value=<?php echo $_GET['updateid']?>>
    First Name  <input name="updateFirstName" type="text" value=<?php echo $_GET['updateFirstName']?>>
  Last Name  <input name="updateLastName" type="text" value=<?php echo $_GET['updateLastName']?>>
 Email   <input name="updateEmail" type="text" value=<?php echo $_GET['updateEmail']?>>
  Grade  <input name="updateGrade" type="text" value=<?php echo $_GET['updateGrade']?>>
    <input type="submit">
</form>

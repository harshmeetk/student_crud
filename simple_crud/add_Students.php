<?php

?>

<form action="addNewStudent.php" method="get" id="addStudent">
    <h1 align="center">Enter New Student Information Here:</h1>

    <table width="50%" style="margin-top: 10%" border="1" cellpadding="3" align="center">

    <tr style="font-weight: bold">
    <tr style="visibility: hidden"><td>Student ID</td><td><input style="width: 100%" type="text"  name="id"></td></tr>

    <tr><td>First Name</td><td><input style="width: 100%" type="text" required name="firstName"></td></tr>
    <tr><td>Last Name</td><td><input style="width: 100%" type="text" required name="lastName"></td></tr>
    <tr><td>Email</td><td><input style="width: 100%" type="text" required name="emailStudent"></td></tr>
    <tr><td>Grade</td><td><input style="width: 100%"type="text" required name="gradeStudent"></td></tr>
    </tr>
    <tr><td >Submit the Information</td><td><input type="submit" name="submit" width="100%" style="background-color: aquamarine;width: 100%"></td></tr>

</table>

</form>
<?php
/**
 * Created by PhpStorm.
 * User: harshmeet
 * Date: 4/22/17
 * Time: 1:47 AM
 */

?><h1>Search by Student Email, Student Last Name, Student First Name or Student Grade </h1>
<form name="searchForm" action="search.php" method="get" >
    <select name="studentValue">
        <option>Email</option>
        <option>Last Name</option>
        <option>First Name</option>
        <option>Grade</option>
    </select>
    <input type="text" name="whatyouwannasearch">
    <input type="submit" name="submit">Submit
</form>

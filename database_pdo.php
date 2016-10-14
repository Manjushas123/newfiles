<?php
require 'database_pdo.html';

$host    = "localhost";
$user    = "root";
$db_name = "mytodo";
$pass    = "compass";

$con = mysql_connect($host, $user, $pass);

if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("mytodo", $con);
If (isset($_POST['Submit'])) {
    $sql = "insert into user(name,age,phone,password,cpassword) values('" . $_POST['name'] . "', '" . $_POST['age'] . "', '" . $_POST['phone'] . "','" . $_POST['password'] . "' ,'" . $_POST['cpassword'] . "')";
    
    if (!mysql_query($sql, $con)) {
        die('Error: ' . mysql_error());
    } else {
        echo "The form data was successfully added to your database.";
        mysql_close($con);
    }
}
?> 

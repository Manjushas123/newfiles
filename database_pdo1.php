<?php
include('database_pdo.php');
if (isset($_POST['Submit']) != '') {
    if ($_POST['name'] == '' || $_POST['age'] == '' || $_POST['phone'] == '' || $_POST['password'] == '' || $_POST['cpassword'] == '') {
        echo "please fill the empty field.";
    } else {
        $sql = "insert into user(name,age,phone,password,cpassword) values('" . $_POST['name'] . "', '" . $_POST['age'] . "', '" . $_POST['phone'] . "','" . $_POST['password'] . "' ,'" . $_POST['cpassword'] . "')";
        $res = mysql_query($sql);
        if ($res) {
            echo "Record successfully inserted";
        } else {
            echo "There is some problem in inserting record";
        }
        
    }
}
?>


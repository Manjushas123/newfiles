<html>
<head>
<title>
form
</title>

<style type="text/css" >
<?php
if (isset($errorMSG)) {
?>

 input:focus
 {
 color: blue;
 font-family:Verdana, Geneva, sans-serif;
 font-weight:bolder;
 text-transform:capitalize;
 border:solid red 1px;
 }
 
 <?php
}
?>

</style>
</head>
<body bgcolor=pink>


<?php
if (isset($errorMSG)) {
?>
   <tr>
    <td id="error"><?php
    echo "<b><i>$errorMSG</i></b>";
?></td>
    </tr>
    <?php
}
?>
<form action="#" method="post">
<font color=blue><i><h1 align="center"> Average Calculation </h1></font></i>

<h2>
<font color= blue>
Maximum:<input type="number" name="maximum"  value="<?php
if (isset($max)) {
    echo $max;
}
?>"  <?php
if (isset($code) && $code == 1) {
    echo "autofocus";
}
?> required/>
</font>
</h2>
<h2>
<font color=blue>
Minimum:<input type="number" name="minimum" value="<?php
if (isset($min)) {
    echo $min;
}
?>"  <?php
if (isset($code) && $code == 1) {
    echo "autofocus";
}
?> required/>
</font>
</h2>
<p align="center">
<input type="submit" name="sub" value="Submit The Values"/>
</p>

</form>
</body>

</html>

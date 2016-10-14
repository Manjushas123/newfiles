<html>
<head>
</head>
<body>
<?php
if (isset($_GET['question'])) {
    $quest = $_GET['question'];
    echo $quest;
} else {
    $quest = 0;
}
$input = array(
    array(
        'q' => '1)what is ur name?',
        'a' => 'a)Manjusha S',
        'b' => 'b)Pratheeksha S'
    ),
    array(
        'q' => '2)what do you like?',
        'a' => 'a)chocos',
        'b' => 'b)icecreams'
    ),
    array(
        'q' => '3)which is your favourite color?',
        'a' => 'a)black',
        'b' => 'b)purple'
    )
);
?>
<form method="post" action="mnew.php?question=<?php
echo $quest + 1;
?>">
<?php
$collected_question = $input[$quest];
$q                  = $collected_question['q'];
$ans                = $collected_question['a'];
$ans1               = $collected_question['b'];
echo $q;
echo "<br>";
?>
<input type="radio" name="name">
<?php
echo $ans;
echo "<br>";
?>
<input type="radio" name="name">
<?php
echo $ans1;
echo "<br>";
?>
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>

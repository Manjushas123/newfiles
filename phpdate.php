 <?php
$t = date("H");

if ($t < "12") {
    echo "Have a good day!";
}
else if ($t<"14") {
    echo "good afternoon";
}
else if ($t<"20") {
    echo "good evening";
}
else if ($t<"24") {
    echo "good night";
}
else
{
    echo "invalid timing";
}
?>

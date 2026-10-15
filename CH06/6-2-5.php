<?php
function printHeader()
{
    echo "<h3>SID:C113181180</h3>";
    echo "<h3>Name:李似巾</h3>";
    echo "<h3>EX04</h3>";;
}
printHeader();
$test = 15;
var_dump($test);
unset($test);
var_dump(isset($test) ? $test : null);
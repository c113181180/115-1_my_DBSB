<?php
function printHeader()
{
    echo "<h3>SID:C113181180</h3>";
    echo "<h3>Name:李似巾</h3>";
    echo "<h3>EX02</h3>";
}
function printExchange($amount, $rate)
{
    $result = $amount * $rate;
    return $result;
}

$rate = printExchange(1000,32.5); 

printHeader();
echo "Money: $rate";
?>
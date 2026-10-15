<?php
function printHeader()
{
    echo "<h3>SID:C113181180</h3>";
    echo "<h3>Name:李似巾</h3>";
    echo "<h3>EX06</h3>";;
}

printHeader();
$weight =75;
$bmi = function($height)use($weight){
    $height = $height / 100;
    return $weight/ $height / $height;
};
$h = 175;
echo "BMI: " . $bmi($h) . "<br/>";
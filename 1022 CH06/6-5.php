<?php
echo "<HR>";
echo "SID: C113181180<br/>";
echo "Name: 李似巾<br/>";
echo "<HR>";



// 匯率換算函數
function rateExchange($amount, $rate) {
   $result = $amount * $rate;
   return $result;
}
?>

<?php
$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";

require ("6-5-1.inc"); 
$file = "6-5-1.inc";
require $file;
?>
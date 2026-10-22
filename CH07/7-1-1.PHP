<?php
echo "<HR>";
echo "SID: C113181180<br/>";
echo "Name: 李似巾<br/>";
 echo "<h3>EX02</h3>";
echo "<HR>";
?>

<?php
$score = array(22,16,30,24);
$total=0;

foreach($score as $element) {
    echo"element: $element <br/>";
    $total += $element;
}
echo "Total:" . $total;
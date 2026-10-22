<?php
echo "<HR>";
echo "SID: C113181180<br/>";
echo "Name: 李似巾<br/>";
 echo "<h3>EX03</h3>";
echo "<HR>";
?>

<?php
$arr = array(
    "Color"=>"Black",
    "name"=>"李似巾",
    "Shape"=>"Triangle",
    100
);
$arr["type"] = "PHP";
unset($arr["type"]);

foreach( $arr as $key => $value ){
    echo "$key => $value ";
}
echo "<br/>";
print_r($arr);
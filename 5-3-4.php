#NAME:李似巾<BR>
#SID:C113181180<BR>
#EX04
<HR>


<?php
$total =0;
for ($i =0; $i<=10; $i++) {
    if ($i %2==1)
        continue;
    echo"|".$i;
    $total +=$i;   
}

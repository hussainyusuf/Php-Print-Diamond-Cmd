<?php
$count = 25;
$fspace = $count-1;
$sspace = 0;
for ($i=0;$i<$count;$i++) {
    $k=0;
    $j=0;
    while ($k<$fspace) {
        echo " ";
        $k++;
    }
    do {
        echo " ";   
        echo "*";
        $j++;
    } while($j<$i);
    echo "\r\n";
    $fspace--;
}
for ($i=$count-2;$i>0;$i--) {
    $k=0;
    $j=0;
    while ($k<=$sspace) {
        echo " ";
        $k++;
    }
    do {
        echo " ";
        echo "*";
        $j++;
    } while ($j<$i);
    echo "\r\n";
    $sspace++;
}
?>
<?php

$functions = New Functions();

$dag = date(D);
$date = date(d-m-Y);

for($i=0;$i<7;$i++)
{
    echo "<div>";
    //echo "test ".$i;
    echo $date+$i;
    
    
    echo "</div>";
}
<?php

$functions = New Functions();

$dag = date(D);
$date = date("d-m-Y");

echo "<table>";
echo "<tr>";
echo "<td> lala </td>";
echo "<td> lala2 </td>";
echo "</tr>";
echo "<tr>";
echo "<td> lala3 </td>";
echo "</tr>";
for($i=0;$i<7;$i++)
{
    echo "<div>";
    //echo "test ".$i;
    //echo $date;
    echo $date+$i;
    
    
    echo "</div>";
}
<?php

$functions = New Functions();

$dag = date(D);
$date = date("d-m-Y");

echo "<table border='1' style='width:100%'>";
echo "<tr>";
echo "<td> maandag </td>";
echo "<td> dinsdag </td>";
echo "<td> woensdag </td>";
echo "<td> donderdag </td>";
echo "<td> vrijdag </td>";
echo "<td> zaterdag </td>";
echo "</tr>";
echo "<tr>";
for($i=0;$i<7;$i++)
{
    echo "<td>";
    //echo "test ".$i;
    //echo $date;
    echo $date;
    
    
    echo "</td>";
}
echo "</tr>";
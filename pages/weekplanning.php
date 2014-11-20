<?php

$functions = New Functions();

$dag = date(D);
$date = date("d-m-Y");
?>
<table border="1" style="width:100%">
<tr>
<td> maandag </td>
<td> dinsdag </td>
<td> woensdag </td>
<td> donderdag </td>
<td> vrijdag </td>
<td> zaterdag </td>
</tr>
<tr>
    
<?php
for($i=0;$i<7;$i++)
{
    echo "<td>";
    //echo "test ".$i;
    //echo $date;
    echo $date;
    
    
    echo "</td>";
}
echo "</tr>";
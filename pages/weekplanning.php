<?php
session_start();

$user = $_SESSION[ 'usrid' ];
$page = $_GET[ 'page' ];

if ( $user ) {
    $usr    = $_SESSION[ 'usr' ];
    $usrid  = $_SESSION[ 'usrid' ];

    require_once( 'functions.php' );
    $functions = new Functions;
}

$dag = date('N');
$date = date("d-m-Y");
?>
<table border="1" style="width:80%">
<tr border="1">
<td> maandag </td>
<td> dinsdag </td>
<td> woensdag </td>
<td> donderdag </td>
<td> vrijdag </td>
<td> zaterdag </td>
<td> zondag </td>
</tr>
<tr>
    
<?php
$counter = 1 - $dag;
$end = 8 - $dag;
echo $counter;
echo $end;
for($i=$counter;$i<$end;$i++)
{
    $curdate = $date;
    echo "<td>";
    print_r(date('Y-m-d', strtotime($$i .' day', strtotime($curdate))));
    $task = $functions->getSingleTaskByDate($usrid, $curdate);
    print_r($task);
    echo "</td>";
}
echo "</tr>";
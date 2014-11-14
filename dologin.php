<?php
$db = mysqli_connect("localhost","id00020_myday","projectmyday", "id00020_myday");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
else   {
$usr = $_POST['username_login'];
$ww = $_POST['password_login'];

$query = "SELECT * FROM users where username = '".$usr."' AND password = '".md5($ww)."'";
$result = $db->query($query);
$row = $result->fetch_array();
if(isset($row))
{
    session_start();
    $_SESSION["usr"] = $usr;
    $_SESSION["usrid"] = $row[0];
    header('Location: index.php');
}
else
{
    header('Location: login.html');
}


}
?>
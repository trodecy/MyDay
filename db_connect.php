<?php
$db = mysqli_connect("localhost","id00020_myday","projectmyday", "id00020_myday");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}
else   {
    $result = $db->query("SELECT * FROM Tasks");
    if (isset($result)) {
        $row = $result->fetch_array();
        foreach($result as $task)
        {
            echo $task['id'] . " " . $task['name']." (".$task['description'].")</br>";
            echo "<br />";
        }
    }
 }
        



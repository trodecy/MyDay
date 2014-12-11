<?php
//include_once "db_connect.php";

class Functions
{

    function __construct()
    {
        $this->db = mysqli_connect("localhost","id00020_myday","projectmyday", "id00020_myday");
    }
    function GetProfile($id)
    {
        $result = $this->db->query("SELECT * FROM users WHERE id='".$id."'");
        $profile = mysqli_fetch_all($result);
        return $profile;
    }

    function createProfile($name, $password)
    {
        $query = "INSERT INTO users (username,password) VALUES ('$name','$password')";
        //echo $query;
        $this->db->query($query);
        return 1;
    }

    function getTaskList($userid)
    {
        $results = $this->db->query("SELECT * FROM Tasks where profileid = ".$userid." ORDER BY priority ASC");
        $tasks = mysqli_fetch_all($results);
        return $tasks;
    }

    function getSingleTask( $taskid )
    {
        $result = $this->db->query( "SELECT * FROM Tasks WHERE id = " . $taskid );
        $task = mysqli_fetch_assoc( $result );
        return $task;
    }

    function insertTask($taskname, $taskdescription, $userid, $time, $date, $consequence, $steps)
    {
        $query = "INSERT INTO Tasks(name,description,profileid,time,date,consequence,steps) VALUES ('".$taskname."','".$taskdescription."', '".$userid."', '".$time."', '".$date."','".$consequence."','".$steps."')";
        echo $query;
        $this->db->query($query);    
        return 1;
    }

    function deleteTask($taskid)
    {
        $this->db->query("DELETE FROM tasks WHERE id =".$taskid);
        return 1;
    }
    
    function updateTask($taskid, $taskname, $taskdescription, $userid, $time, $date)
    {
        $query = "UPDATE Tasks SET name='".$taskname."',description='".$taskdescription."',profileid='".$userid."',time='".$time."',date='".$date."' WHERE id=".$taskid."";
        $this->db->query($query);    
        echo $query;
        return 1;            
    }

    function updateTaskPriority( $taskid, $priority ) 
    {
        $query = "UPDATE Tasks SET priority = " . $priority . " WHERE id = " . $taskid . ""; 
        
        if ( $this->db->query( $query ) )
            return 1;
        else
            return 0;
    }
    
    function getSingleTaskByDate( $taskid, $date )
    {
        //echo "SELECT * FROM Tasks WHERE profileid = " . $taskid . " AND date = '" . $date . "'" ;
        $result = $this->db->query( "SELECT * FROM Tasks WHERE profileid = " . $taskid . " AND date = '" . $date . "'");
        $task = mysqli_fetch_assoc( $result );
        return $task;
    }

    function getAllColors() {
        $colors = array(
            'white'         => 'Wit',
            'light-blue'    => 'Lichtblauw',   
            'blue'          => 'Blauw',
            'purple'        => 'Paars',
            'pink'          => 'Roze', 
            'red'           => 'Rood',
            'orange'        => 'Oranje',
            'yellow'        => 'Geel',
            'cyan'          => 'Cyaan',
            'green'         => 'Groen'
        );

        return $colors;
    }
    
}
/*
echo "werkt niet";
$function = new Functions();
print_r($function->getTaskList(1));
echo "done";
*/
?>
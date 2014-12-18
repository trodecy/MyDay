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
$curdate = date("Y-m-d");

             
$week_string = date("d-m",strtotime('monday this week')).' tot '.date("d-m",strtotime("sunday this week"));
?>

<div class="content col-md-9">

    <div id="taskbar">
        <h1> Weekplanning <?php echo $week_string; ?> </h1>
        <div class="btn-group buttons">
            <a href="?page=addtask">
                <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
            </a>
        </div>
    </div>

    <main id="main">

        <table class="table styled-table">
        
            <thead>

                <tr>
            
                    <th> Maandag </th>
                    <th> Dinsdag </th>
                    <th> Woensdag </th>
                    <th> Donderdag </th>
                    <th> Vrijdag </th>
                    <th> Zaterdag </th>
                    <th> Zondag </th>
                
                </tr>

            </thead>
            
            <tr>
        
                <?php
                    $counter    = 1 - $dag;
                    $end        = 8 - $dag;

                    for ( $i = $counter; $i < $end; $i++ ) {
                        echo "<td>";
                            $wday = date( 'Y-m-d', strtotime( $i .' day', strtotime( $curdate ) ) );
                            //echo $wday;
                            echo "</br>";
                            $taak = $functions->getSingleTaskByDate( $usrid, $wday );
                        //foreach($taken as $taak)
                        //{
                            echo "<a href='?pages=viewtask&task_id=" . $taak[ 'id' ] . "'>" . $taak[ 'name' ] . "</a></br>";        
                        //}
                        echo "</td>";
                    }

                ?>

            </tr>

        </table>

    </main>
</div>
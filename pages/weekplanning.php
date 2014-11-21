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
?>

<div class="content col-md-10">

    <div id="taskbar">
        <div class="btn-group buttons">
            <a href="?page=addtask">
                <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
            </a>
        </div>
    </div>

    <main id="main">

        <table class="table table-bordered">
        
            <thead>

                <tr>
            
                    <th> maandag </th>
                    <th> dinsdag </th>
                    <th> woensdag </th>
                    <th> donderdag </th>
                    <th> vrijdag </th>
                    <th> zaterdag </th>
                    <th> zondag </th>
                
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
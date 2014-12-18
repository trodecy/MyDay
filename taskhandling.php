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

$name 			= $_POST[ 'task_name' ];
$date 			= $_POST[ 'task_date' ];
$description 	= $_POST[ 'task_description' ];
$consequence 	= $_POST[ 'task_consequence' ];
$steps 			= $_POST[ 'task_steps_array' ];
$color 			= $_POST[ 'task_color' ];
$lamp			= $_POST[ 'task_lamp' ];

$jsteps 		= json_encode($steps);

$functions->insertTask( $name, $description, $usrid, $date, $consequence, $jsteps, $color, $lamp );

echo 'color: ' . $color;
echo 'lamp: ' . $lamp;

// header("Location: index.php?page=taken");
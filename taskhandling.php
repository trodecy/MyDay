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

$name = $_POST['task_name'];
$duration = $_POST['task_duration'];
$date = $_POST['task_date'];
$description = $_POST['task_description'];
$consequence = $_POST['task_consequence'];
$steps = $_POST['task_steps_array'];

$jsteps = json_encode($steps);

$functions->insertTask($name, $description, $usrid, $duration, $date, $consequence, $jsteps);

header("Location: index.php?page=taken");
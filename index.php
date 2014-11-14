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

if ( $page )
    $current_page = $page . '.php';
else
    $current_page = 'index.php';

# Header
require_once( 'inc/header.php' );

# Content
if ( ! $user )
    header( 'Location: login.html' );
else
    require_once( 'pages/' . $current_page );

# Footer
require_once( 'inc/footer.php' );


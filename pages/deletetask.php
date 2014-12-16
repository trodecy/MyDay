<?php

    $id = $_GET[ 'id' ];

    $functions->deleteTask( $id );

    header( '?page=taken' );
    die();
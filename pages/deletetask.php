<?php

    $id = $_GET[ 'id' ];

    $functions->deleteTask( $id );

    header( 'Location: ?page=taken' );
    die();
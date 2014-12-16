<?php

    $id = $_GET[ 'id' ];


    if ( $functions->deleteTask( $id ) )
        echo 'yay';
    else
        echo 'nay!';

    // header( 'Location: ?page=taken' );
    // die();
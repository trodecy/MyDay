<?php

    $task_id = $_GET[ 'task_id' ];

    $task_info = $functions->getSingleTask( $task_id );

    $task_id    = $task_info[ 'id' ];
    $task_name  = $task_info[ 'name' ];
    $task_desc  = $task_info[ 'description' ];
    $task_steps = json_decode( $task_info[ 'steps' ] );
    $task_cons  = $task_info[ 'consequenties' ];

?>

<!-- Content part -->
<div class="content col-md-10">

    <main id="main">

        <h2> Informatie van de taak: <?php echo $task_name; ?> </h2>

        <div class="info-block">
            <p>
                <?php echo $task_desc; ?>
            </p>
        </div>

        <?php if ( $task_steps ) { ?>

            <h2> Hoe moet deze taak? </h2>

            <div class="info-block">

                <ul class="list-group">

                    <li class="list-group-item">Item</li>
                    <li class="list-group-item">Item</li>
                    <li class="list-group-item">Item</li>

                </ul>

            </div>

        <?php } ?>

        <?php if ( $task_cons ) { ?>

        <h2> Wat als je deze taak niet doet? </h2>

        <div class="info-block">
            <p>
                <?php echo $task_cons; ?>
            </p>
        </div>

        <?php } ?>

    </main>

</div>
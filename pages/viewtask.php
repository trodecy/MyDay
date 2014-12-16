<?php

    $task_id = $_GET[ 'task_id' ];

    $task_info = $functions->getSingleTask( $task_id );

    $task_id    = $task_info[ 'id' ];
    $task_name  = $task_info[ 'name' ];
    $task_desc  = $task_info[ 'description' ];
    $task_steps = json_decode( $task_info[ 'steps' ] );
    $task_cons  = $task_info[ 'consequence' ];

?>

<!-- Content part -->
<div class="content col-md-10">

    <div id="taskbar">
        <div class="btn-group buttons">
            <a href="?page=deletetask&id=<?php echo $task_id; ?>">
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
            </a>
        </div>
    </div>

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

                    <?php foreach ( $task_steps as $step ) { ?>
                        <li class="list-group-item"><?php echo $step; ?></li>
                    <?php } ?>

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
<!-- Content part -->
<div class="content col-md-10">

    <div id="taskbar">
        <div class="btn-group buttons">
            <a href="?page=addtask">
                <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
            </a>
        </div>
    </div>

    <main id="main">

        <table class="table table-bordered sortableTable">
            <thead>
                <tr><th>Taak</th></tr>
            </thead>
            <tbody>
                <?php 
                $tasks = $functions->getTaskList($usrid);
                $html = '';
                foreach($tasks as $task)
                {

                    $task_id = $task[ 0 ];
                    $task_name = $task[ 1 ];

                    $html .= '<tr>';
                        $html .= '<td>';
                            $html .= '<a data-id="' . $task_id . '" href="?page=viewtask&task_id=' . $task_id . '">';
                                $html .= $task_name;
                            $html .= '</a>';
                        $html .= '</td>';
                    $html .= '</tr>';
                }
                $html .= '<input type="button" id="button_id" value="Update" onClick="UpdatePriority('.$pList.');">';
                print $html;
                ?>
            </tbody>
        </table>

    </main>

</div>
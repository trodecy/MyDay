<!-- Content part -->
<div class="content col-md-10">

    <main id="main">

        <h2> Taak invoeren </h2>

        <form id="task_form" class="form" role="form" method="POST" action="taskhandling.php">

            <div class="form-group">
                <label for="task_name">Taak naam <span class="required">*</span></label>
                <input type="text" class="form-control" name="task_name" id="task_name" placeholder="Taak naam">
            </div>

            <div class="form-group">
                <label for="task_duration">Duur van de taak</label>
                <input type="number" class="form-control" name="task_duration" id="task_duration" placeholder="Hoeveel tijd neemt de taak in beslag?">
            </div>

            <div class="form-group">
                <label for="task_date">Datum</label>
                <input type="date" class="form-control" name="task_date" id="task_date" placeholder="De taak is op welke dag?">
            </div>
            
            <div class="form-group">
                <label for="task_description">Beschrijving</label>
                <textarea class="form-control" name="task_description" id="task_description" rows="4" placeholder="Een optionele beschrijving van de taak"></textarea>
            </div>

            <div class="form-group">
                <label for="task_consequence">Consequentie(s)</label>
                <textarea class="form-control" name="task_consequence" id="task_consequence" rows="4" placeholder="Consequentie(s) als de taak niet uitgevoerd wordt"></textarea>
            </div>

            <div class="form-group">
                <label for="task_step_desc">Stappen</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="task_step_desc" id="task_step_desc" placeholder="Een stap binnen de taak">
                    <span class="input-group-btn">
                        <button class="btn btn-danger" id="add_task_step" type="button">Toevoegen</button>
                    </span>
                </div>

                <ul class="list-group" id="task_steps">

                </ul>
            </div>
            
            <button type="submit" class="btn btn-success">Taak invoeren</button>

        </form>

    </main>

</div>
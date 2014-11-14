<?php
session_start();
if(!isset($_SESSION['usrid']))
{
    header('Location: login.html');
}
else
{
    $usr = $_SESSION['usr'];
    $usrid = $_SESSION['usrid'];
    include_once "functions.php";
    $functions = new Functions;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyDay Admin Panel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
<div id="top-bar">

            <div id="welcome">
                <img src="http://placekitten.com/g/300/300" class="img-circle" alt="placeholder" />
                Welkom, <span class="user"><?php echo $usr ?></span>
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span></button>
            </div>

        </div>

    <!-- Page wrapper -->
    <div class="page container-fluid">

        <!-- Full page row -->
        <div class="row">

            <!-- Menu part -->
            <div id="menu-wrapper" class="col-md-2">
                
                <div id="menu-top">

                </div>

                <nav id="main-menu">

                    <ul>
                        <li>
                            <a href="#">
                                Taken
                            </a>
                        </li>
                    </ul>

                </nav>

            </div>

            <!-- Content part -->
            <div class="content col-md-10">

                <main id="main">

                    <h2> Taak invoeren </h2>

                    <form id="task_form" class="form" role="form">

                        <div class="form-group">
                            <label for="task_name">Taak naam <span class="required">*</span></label>
                            <input type="email" class="form-control" name="task_name" id="task_name" placeholder="Taak naam">
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
        
        </div>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/app.js"></script>

  </body>
</html>

<?php
}
?>
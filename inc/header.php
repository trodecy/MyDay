<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>MyDay Admin Panel</title>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


  </head>
  <body>

    <div id="top-bar">

        <div class="content-container">

            <!-- Left -->
            <div id="branding">
                <img src="img/myday_logo_wh_sm.png" alt="MyDay" />
            </div>

            <!-- Right -->
            <div id="welcome">
                <img src="http://placekitten.com/g/300/300" class="img-circle hidden-xs hidden-sm" alt="placeholder" />
                <span class="user">Welkom, <?php echo $usr; ?></span>
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span></button>
            </div>

        </div>

    </div>

    <!-- Page wrapper -->
    <div id="main-container" class="page container-fluid">

        <div class="content-container">

            <!-- Full page row -->
            <div class="row">

                <!-- Menu part -->
                <div id="menu-wrapper" class="col-md-2">
                    
                    <nav id="main-menu">

                        <!-- Responsive menu -->
                        <div id="toggle_mobile_menu">
                            <span id="menu_icon" class="fa fa-navicon"></span>
                        </div>

                        <ul>
                            <li>
                                <a href="?page=index">
                                    <span class="fa fa-home"></span> Home
                                </a>
                            </li>
                            <li>
                                <a href="?page=taken">
                                    <span class="fa fa-tasks"></span> Taken
                                </a>
                            </li>
                            <li>
                                <a href="?page=weekplanning">
                                    <span class="fa fa-calendar"></span> Weekplanning
                                </a>
                            </li>
                        </ul>

                    </nav>

                </div>
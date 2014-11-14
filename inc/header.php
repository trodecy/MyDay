<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>MyDay Admin Panel</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div id="top-bar">

        <div id="welcome">
            <img src="http://placekitten.com/g/300/300" class="img-circle hidden-xs hidden-sm" alt="placeholder" />
            Welkom, <span class="user"><?php echo $usr ?></span>
            <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-cog"></span></button>
        </div>

    </div>

    <!-- Page wrapper -->
    <div id="main-container" class="page container-fluid">

        <!-- Full page row -->
        <div class="row">

            <!-- Menu part -->
            <div id="menu-wrapper" class="col-md-2">
                
                <nav id="main-menu">

                    <!-- Responsive menu -->
                    <div id="toggle_mobile_menu">
                        <span id="menu_icon" class="glyphicon glyphicon-th-large"></span>
                    </div>

                    <ul>
                        <li>
                            <a href="?page=index">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="?page=taken">
                                Taken
                            </a>
                        </li>
                    </ul>

                </nav>

            </div>
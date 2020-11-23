<?php
    
    function head(){
    
        
        echo '
        
        <!DOCTYPE html>
        <html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    <style type="text/css">
    img {
        width: 100%; height:100%

    }
    .icon {
        width: 25%; height:25%
        
    }
    .title {
        width: 100%; height:100%
    }
    </style>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>';
    }
    function sidebar_header() {
echo '
<body ">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar"  class="active">
            <div class="sidebar-header"  >
                <h3>Bootstrap Sidebar</h3>
                <img src="../images/GreenguideLogoCOOL.png" id="sidebaricon">
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" >
                        <i class="fas fa-home"></i>
                        Jardines
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">';
                    if(isset($_SESSION["user_id"])){
                        require_once("../models/connection.php");
                        $sql = "SELECT garden_name FROM gardens WHERE user_id LIKE ".$_SESSION["user_id"].";";
                        $result = $conn->query($sql);
                    
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '
                                <li>
                                    <a href="#">'.$row["garden_name"].'</a>
                                </li>';
                            }
                        }
                        echo '
                        <li>
                            <a href="#">Nuevo jardín <i class="fas fa-plus"></i></a>
                        </li>';
                    }
                echo    '</ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" >
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#" >Page 1</a>
                        </li>
                        <li>
                            <a href="#" >Page 2</a>
                        </li>
                        <li>
                            <a href="#" >Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <div class="row no-gutters">
                <div class="col-1 col-md-1">
                <br/>
                    <button type="button" id="sidebarCollapse" class="btn btn-info d-lg-none ml-auto">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
                <div class="col-sm-10 col-md-10">
                
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                        <div class="container-fluid">
                
                            <h1 id="title"> GreenGuide</h1>
                            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>

                            ';
                            if(isset($_SESSION["user_id"])){
                            echo'<div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="../models/close_session.php">cerrar sesión</a>
                                    </li>
                                </ul>
                            </div>';
                            }
                            else{
                            echo'<div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="http://localhost/Green-Guide/brayan/components/login.php">Iniciar Sesion</a>
                                    </li>
                                    <li class=" -item">
                                        <a class="nav-link" href="http://localhost/Green-Guide/brayan/components/register.php">Crear cuenta</a>
                                    </li>
                                </ul>
                            </div>
                            ';
                        }
                        echo '
                        </div>
                    </nav>
                </div>
            </div>';
    }
?>

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
    <link rel="stylesheet" href="../style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>


<body style="background-image: url(../images/home.jpg); background-size: cover;">
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active" style="background:green">
            <div class="sidebar-header"  style="background:green">
                <h3>Bootstrap Sidebar</h3>
                <img src="../images/GreenguideLogoCOOL.png" id="sidebaricon">
            </div>

            <ul class="list-unstyled components">
                <li >
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="background:green">
                        <i class="fas fa-home"></i>
                        Jardines
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu" style="background:green">
                        <li>
                            <a href="#" style="background:green">Jardin 1</a>
                        </li>
                        <li>
                            <a href="#" style="background:green">Jardin 2</a>
                        </li>
                        <li>
                            <a href="#" style="background:green">Jardin 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="background:green">
                        <i class="fas fa-copy"></i>
                        Pages
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#" style="background:green">Page 1</a>
                        </li>
                        <li>
                            <a href="#" style="background:green">Page 2</a>
                        </li>
                        <li>
                            <a href="#" style="background:green">Page 3</a>
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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">iniciar sesión</a>
                            </li>
                            <li class=" -item">
                                <a class="nav-link" href="#">Crear cuenta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            </div>
            </div>';
    }
?>

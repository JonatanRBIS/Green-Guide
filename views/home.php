<?php
session_start();
require("../components/header.php");
require("../components/footer.php");
require("../components/home.php");


head("","about");
if ($_GET['a']==1){
    echo'
    <div class="alert alert-danger" role="alert">
    Usted tiene una sesion activa. <a href="close_session.php">cierre sesion para continuar</a>
    </div>';
}
sidebar_header();
home(); 
footer();
close_bar();

?>
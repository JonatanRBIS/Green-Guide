<?php

    function home(){
        echo "
        
    <div>
    <!--In this div it contains an image and the title of it-->
            <div class='container' style='text-align:center'> 
                <div class='row'>
            </div>
        <h1>Everything you need to know about plants, in one place.</h1>
        </div>
    <!--In this container has information about the project-->
        <div class='container' style='text-align: justify'>
            <p>Find information about the care of plants, problems that may present, and even plagues that can afect them. It's not 
                easy to learn everything about every single type of plant, not to mention every plant is different because they are living things, there is 
                no need to worry abour that anymore. GreenGuide is a completely free website that can help to solve all of thi problems. You can start by
                creating a profile!
            </p>
            <button type='button' class='btn btn-outline-dark' id='Create an account'>Create an account</button>
            <br> <br>
            <p>Registration is no needed. You can explore any of the sections of the website or write on the searching bar anything that you need. 
            However being a user on GreenGuide gives benefits such as:
            <ul>
                <li>Creating gardens, where you can save the plants you have in home.</li>
                <li>Save your favorite plants. </li>
                <li>Consult plagues and problems that are related to the plants you have. </li>
            </ul>
            </p>
            <h5><a href='#'>Get to know us</a></h5>
        </div>
        ";
    }
    function home1(){
        echo "  <div class='container-fluid'>
        <div class='row'>
            
            <div class='col-md-6'>
                <div class='d-flex justify-content-center h-100' style='margin-top:10%'>
                    <div class='user_card'>
                        <div class='d-flex justify-content-center'>
                            <div class='brand_logo_container'>
                                <img src='..\images\logoround.png' class='brand_logo' alt='Logo'>
                            </div>
                        </div>
                        <div class='d-flex justify-content-center form_container'>
                            <form id='form'>
                                <div class='form-group mb-3'>
                                    <label for=''>Nombre de usuario</label>
                                    <input type='text' class='form-control' name='name' id='name' aria-describedby='helpId' placeholder='' required>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Correo electronico</label>
                                    <input type='email' class='form-control' name='email' id='email' aria-describedby='emailHelpId' placeholder='' required>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Dirección</label>
                                    <input type='text' class='form-control' name='direccion' id='direccion' aria-describedby='helpId' placeholder=''>
                                </div>
                                <div class='form-group'>
                                    <label for=''>Jardines</label>
                                    <input type='text' class='form-control' name='direccion' id='direccion' aria-describedby='helpId' placeholder=''>
                                </div>
                                <div class='form-group'>
                                    <label for=''>No. de plantas</label>
                                    <input type='text' class='form-control' name='direccion' id='direccion' aria-describedby='helpId' placeholder=''>
                                </div>
                                
                            </form>
                            <script src='../js/validate_data.js'></script>
                        </div>
                    </div>
                </div>
            </div>
                <div class='col-md-6'>
                    <div class='container' style='text-align:center'>
                    <h1 style='font-size: 4em; '>Hola</h1>
                    <img src='../images/ficusimagen.jpg' alt='Plantita'>
                </div>
            </div>
        </div>
    </div>
        ";   
    } 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .jumbotron{
            margin-top:15%; 
            text-align:center;
        }
        .img-rounded-circle{
            border-radius:49%;
        }
        
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" >
        <div class="jumbotron"  >
            <h1 class="display-3">Green Guide</h1>
            <br>
            <img src="../images/GreenguideLogoCOOL.png" alt="Green_guide_logo" style="border-radius:50%"></img>
            <br> <br>
            <hr class="my-2">
            <p>More info</p>
            <form action="validate_user.php" method="post">
                <div class="form-group">
                  <label for="">Correo</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="usuario@ejemplo.com">
                  <br>
                  <div class="form-group">
                    <label for="">Contraseña<a href=""></a></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="****************">
                  </div>
                </div>
                <a href="#">texto de ejemplo</a>
            </form>
        </div>
    </div>  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domotica en el Claudio</title>
    <link rel="stylesheet" href="./webroot/css/estilos.css">



    <!-- BOOTSTRAP -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- FONTS -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>


<body>

    <?php
    try {
        if (compruebaBase() != "domotica") {

            crearBase();
        }
    } catch (PDOException $e) {
    } ?>


    <header>
        <a href="./index.php"><img src="./webroot/img/logo.png" alt="logo"></a>
        <!--<h1><span class="letra"> D</span>omótica  <span class="letra">C</span>laudio</h1>-->
        <?

        if (estaValidado()) {
        ?>
            <form action="./index.php" method="POST" id= "log">

                <input type="submit" name="logout" id="logout" value="">
            </form>
        <?
        }
        ?>
    </header>
<?php
    if(estaValidado()){
?>

        <nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color:#e7d14358; width:'100%'; ">
          
            <div class="container-fluid">
                <button class="navbar-toggler" id="hamb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-start text-light" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <form action="./index.php" method="post" id="menu">
                            <input type="submit" value="Arduino 1" name="arduino1" class="nav-link boton" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;">
                            <input type="submit" value="Arduino 2" name="arduino2" class="nav-link boton" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;">
                            <input type="submit" value="Arduino 3" name="arduino3" class="nav-link boton" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;">
                            <input type="submit" value="Arduino 4" name="arduino4" class="nav-link boton" style="color: #AC6238;font-family: 'Rubik', sans-serif;font-weight: 500;">
    
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        
        <?php
    }

?>



    <main>

        <?
        require_once $_SESSION['vista'];
        ?>
    </main>

    <footer class="text-center mt-5 p-4" id="pie">

    <div  class= "container">

        <div class="row">
        
        <div class="col-12 d-flex justify-content-center">
            © Copyright:&nbsp; &nbsp;
                <a  href="https://www.claudiomoyano.es/" id="enlaceFooter">   claudiomoyano.es</a>
            </div>
    
        </div>
    </div>

</footer>
</body>


<!-- CHARTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="./js/app.js"></script>
</body>

</html>

<?php 
session_start();

if(!isset($_SESSION['Nombre_Usuario'])){
    header("Location: login.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del curso</title>
    <link rel="stylesheet" href="css/estilos.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
   <link rel="stylesheet" 
   href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
   <script src="js/jquery.js"></script>

<style>

.cards:hover{
  box-shadow: 20px 20px 100px -50px #000;
  transition: 0.3s;
}

</style>

</head>
<body style="background-image: url('img/SaturnoBackground.jpg');">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="img/SaturnoLogo.png" alt="logo" width="150px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cursos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Ptyhon</a></li>
                  <li><a class="dropdown-item" href="#">Desarrollo De Videojuegos</a></li>
                  <li><a class="dropdown-item" href="#">Dibujo</a></li>
                  <li><a class="dropdown-item" href="#">Graficas 3D</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Otros</a></li>
                </ul>
              </li>
             
            </ul>
            <form class="d-flex">
             


              <button><a class="link" href="login.html">Iniciar Sesion</a></button>
              <button><a class="link" href="register.html">Registrarse</a></button>

            </form>


            <div class="user-pic">
              <img src="img/ProfilePicture.png" class="user-pic" onclick="toggleMenu()" >
            </div>

          </div>
        </div>

        <div class="sub-menu-wrap" id="subMenu">

          <div class="sub-menu">
            <div class="user-info">
              <img src="img/ProfilePicture.png">
              <p><?php echo $_SESSION['Rol_Usuario']; ?></p>
              <br>
              <h3><h3><?php echo $_SESSION['Nombre_Usuario']; ?></h3></h3>
              <h3><?php echo $_SESSION['NomPatr_Usuario']; ?></h3>
             <h3><?php echo $_SESSION['NomMatr_Usuario']; ?></h3>
            </div>
            <hr>
        
          <a href="editar.php" class="sub-menu-link">
        
          <img src="img/Profile.png">
          <p>Editar Perfil</p>
        <span>></span>
        
          </a>
        

          <a href="#" class="sub-menu-link">

            <img src="img/Cursos.png">
            <p>Mis cursos</p>
          <span>></span>
          
            </a>
        
        
              <a href="logout.php" class="sub-menu-link">
        
                <img src="img/Logout.png">
                <p>Cerrar Sesion</p>
              <span>></span>
              
                </a>
        
        
          </div>
        </div>




      </nav>









    
    
      </div>









</div>






<div class="contenedor-detalles" style="background-color: aliceblue;">
  <div class="cart" >
    <div class="pt-3 pl-0 pb-0 pr-0" style="height: auto; width: auto;">
    <i class="fas fa-shopping-cart fa-2x ml-md-5">  </i>
    </div>
    
    <span style="background-color: black;" class="badge badge-sucess mt-0 align-self-start" id="cart_item_count" style="margin-left: -25
    px; margin-top: -5px;">0</span>
    
     </div>
    
<div class="row">

    <div class="col-md-6 order-md-1">

      <div id="carouselImages"  class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/Graficas.jpg"  class="d-block w-100">
            
          </div>

          <div class="carousel-item ">
            <img src="img/Graficas2.png"  class="d-block w-100">
          </div>

          <div class="carousel-item ">
            <img src="img/Graficas3.jpg"  class="d-block w-100">
          </div>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>



      

    </div>
    <div class="col-md-6 order-md-2">
<h2 class="card-title">Curso de Graficas</h2>
<h2>$ 150.00 MX</h2>
<p>Lo que vas a aprender:</p>
<p class="lead">
    Curso de Graficas 3D tradicional
    Aprovecha el tiempo de aprender a diseñar videojuegos en tercera dimension por Visual Studio y con Three.js
</p>


<p>Este curso contiene:</p>
<p class="lead">
    3 horas de clases por dia
 
</p>


<p class="lead">
 
  Recursos descargables

</p>


<p class="lead">

  Tareas
 
</p>

<p class="lead">

  Certificado de finalizacion
 
</p>




<div class="d-grid gap-3 col-10 mx-auto">
    <button class="btn btn-primary" type="button">Comprar Ahora</button>
    <button class="btn btn-primary cart_btn" type="button">Agregar al carrito</button>
</div>

    </div>
</div>

</div>



<div class="row pr-md-5 d-flex justify-content-center justify-content-md-end bg-info">
  <div class="col-md-6 col-lg-4 mr-lg-5 border p-3 pb-4 rounded-lg bg-white ml-md-0" id="cart" style="position:
  absolute;z-index: 1;top: 80px;overflow: auto;">
  
  
  <div class="d-flex">
  <div class="col-md-3">
  <h5>Productos</h5>
  </div>
  <div class="col-md-3 d-flex flex-wrap align-content-center">
  <h5>Title</h5>
  </div>
  <div class="col-md-3 d-flex flex-wrap align-content-center">
  <h5>Qty</h5>
  </div>
  <div class="col-md-2 d-flex flex-wrap align-content-center">
  <h5>Price</h5>
  </div>
  <div class="col-md-1"></div>
  
  
  </div>
  
  <div id="order" style="overflow: auto;height: 250px;">
  
  
  </div>
  <div id="cart_footer" >
  <div id="order_btn" class="text-center text-white w-100 bg-dark p-2 font-weight-bold" style="letter-spacing: 
  1.2px; font-size: 20px;">
    Order
  </div>
  
  </div>
  
  
  </div>
  
  </div>
  

  <script>

    let subMenu = document.getElementById("subMenu");
  
    function toggleMenu(){
  
  subMenu.classList.toggle("open-menu");
  
    }
  
  
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


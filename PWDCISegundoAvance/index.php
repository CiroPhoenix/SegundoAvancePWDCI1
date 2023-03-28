
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
    <title>Academia Saturno - Inicio</title>
    <link rel="stylesheet" href="css/estilos.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
   <link rel="stylesheet" 
   href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
   <script src="js/jquery.js"></script>

<style>

.cards:hover{
  box-shadow: 20px 20px 100px -50px #000;
  transition: 0.3s;

  background: #2079b0;
  background-image: -webkit-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -moz-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -ms-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -o-linear-gradient(top, #2079b0, #eb94d0);
  background-image: linear-gradient(to bottom, #2079b0, #eb94d0);
  text-decoration: none;
       
       
       
       
       
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}



.cards{
  background-color: whitesmoke;
  cursor: pointer;

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
            <ul class="navbar-nav ">
              <li  class="nav-item" >
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li class="nav-item">
              <li>
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
             


              <button><a class="link" href="login.php">Iniciar Sesion</a></button>
              <button><a class="link" href="register.php">Registrarse</a></button>

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
</br>
      <h3><?php echo $_SESSION['Nombre_Usuario']; ?></h3>
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


<div class="container p-5 mt-2" style="background-color: rgb(179, 179, 179); background-repeat: no-repeat; background-size: cover;   border-color: rgb(255, 102, 151) rgb(120, 0, 74) rgb(255, 102, 151) rgb(120, 0, 74); border-width: 20px;
border-style: solid;" >
  <div class="row d-flex justify-content-center">
<div class="col-md-6">


<div class="input-group">
<input type="text"  placeholder="¿Que te gustaria aprender?" class="form-control" id="inp">
<div class="input-group-append">
<button type="button" class="btn btn-dark" id="search" >Buscar</button>
</div>
</div>
</div>


<div class="cart" >
  <div class="pt-3 pl-0 pb-0 pr-0" style="height: auto; width: auto;">
  <i class="fas fa-shopping-cart fa-2x ml-md-5">  </i>
  </div>
  
  <span style="background-color: black;" class="badge badge-sucess mt-0 align-self-start" id="cart_item_count" style="margin-left: -25
  px; margin-top: -5px;">0</span>
  
   </div>
  


</div>
<div class="row p-5" id="panel">
<h1 class="display-3 text-center text-muted" id="not_find_any_thing"></h1>


<div class="contenedor-filtro" style="margin-left: 120px;">

  <div style="margin-top: 5px;">
<input class="boton-filtro" type="radio" name="filtro" id="todo" checked>
<label class="filtro" for="todo">Todo</label>   
<input class="boton-filtro" type="radio" name="filtro" id="ptyhon" checked>
<label class="filtro" for="ptyhon">Ptyhon</label>   
<input class="boton-filtro" type="radio" name="filtro" id="videojuegos" checked>
<label class="filtro" for="videojuegos">Desarrollo de Videojuegos</label>   
<input class="boton-filtro" type="radio" name="filtro" id="dibujo" checked>
<label class="filtro" for="dibujo">Dibujo </label>   
<input class="boton-filtro" type="radio" name="filtro" id="graficas" checked>
<label class="filtro" for="graficas">Graficas 3D</label>  

<div class="imagenes-filtro">
  
  <div class="ptyhon">
    <div class="col-md-3 mt-5" >
 

      <div class="cards p-2">
        
          <img  class="card-img-top" src="img/Ptyhon.jpg" alt="">
        
    
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5  class="card-title">Ptyhon</h5>
    <span class="text-success">$150.00 MXN</span>
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    </div>
        </div>
      </div>
    </div>


  </div>



  <div class="ptyhon">
    <div class="col-md-3 mt-5" >
 

      <div class="cards p-2">
        
          <img  class="card-img-top" src="img/Ptyhon2.jpg" alt="">
        
    
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5  class="card-title">Ptyhon II</h5>
    <span class="text-success">$150.00 MXN</span>
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    </div>
        </div>
      </div>
    </div>


  </div>
  
  

  <div class="dibujo">
    <div class="col-md-3 mt-5">
      <div class="cards p-2">
    
        
          <img  class="card-img-top" src="img/Dibujo.jpg" alt="">
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5 id="dibujo" class="card-title">Dibujo</h5>
    <span class="text-success">$120.00 MXN</span>
    
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    
    </div>
    
        </div>
    
      </div>
    </div>
  </div>




  <div class="dibujo">
    <div class="col-md-3 mt-5">
      <div class="cards p-2">
    
        
          <img  class="card-img-top" src="img/Dibujo2.jpg" alt="">
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5 id="dibujo" class="card-title">Dibujo II</h5>
    <span class="text-success">$95.00 MXN</span>
    
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    
    </div>
    
        </div>
    
      </div>
    </div>
  </div>
  


  <div class="graficas">
    <div class="col-md-3 mt-5">
      <div class="cards p-2">
    
        
          <img  class="card-img-top" src="img/Graficas.jpg" alt="">
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5 id="dibujo" class="card-title">Graficas</h5>
    <span class="text-success">$95.00 MXN</span>
    
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    
    </div>
    
        </div>
    
      </div>
    </div>
  </div>


  <div class="graficas">
    <div class="col-md-3 mt-5">
      <div class="cards p-2">
    
        
          <img  class="card-img-top" src="img/Graficas2.png" alt="">
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5 id="dibujo" class="card-title">Graficas II</h5>
    <span class="text-success">$95.00 MXN</span>
    
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    
    </div>
    
        </div>
    
      </div>
    </div>
  </div>
  
  

  <div class="videojuegos">
    <div class="col-md-3 mt-5">
      <div class="cards p-2">
  
        
          <img  class="card-img-top" src="img/Videojuegos.jpg" alt="">
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5 id="dibujo" class="card-title">Videojuegos</h5>
    <span class="text-success">$150.00 MXN</span>
    
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    
    </div>
    
        </div>
    
      </div>
    </div>
  </div>


  <div class="videojuegos">
    <div class="col-md-3 mt-5">
      <div class="cards p-2">
  
        
          <img  class="card-img-top" src="img/Videojuegos2.jpg" alt="">
        
        <div class="card-body">
    <div class="d-flex justify-content-between">
    
      <h5 id="dibujo" class="card-title">Videojuegos II</h5>
    <span class="text-success">$150.00 MXN</span>
    
    </div>
    <p class="card-text" style="font-size: 14px;">NanoFlex</p>
    <div class="d-flex justify-content-between">
    
    <div class="bg-dark text-white text-center pl-2 pr-2 cart_btn">Agregar Carrito</div>
    <a  class="bg-dark text-white text-center pl-2 pr-2" href="curso-detalle.php">Ver Curso</a>
    <div class="bg-dark text-white text-center pl-2 pr-2">Lista de deseo</div>
    
    </div>
    
        </div>
    
      </div>
    </div>
  </div>

 
  </div>



  




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


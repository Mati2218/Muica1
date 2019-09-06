<?php
session_start();
include ('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Artistas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
     <link rel="stylesheet" href="stilos.css">
  <link rel="stylesheet" href="fonts.css">



  <style type="text/css">

    body{
      background-image: url(http://fotos.subefotos.com/9b4993b92a0b0374e23868de1e99ddaco.gif);
      outline: none;
    }
 .logbtn1{
  display: block;
  width: 100%;
  height: 50px;
  border: none;
  background: linear-gradient(120deg,#e67e22,#ff214f);
   background-size: 200%;
   outline: pointer;
   transition: .5s;
}
.logbtn1:hover{
  background-position: right;
}

.form-control:hover{
  border:2px solid #ff214f;
}


body::-webkit-scrollbar{
  width: 7px;
}

body::-webkit-scrollbar-thumb{
  background: red;
  opacity: 0.1;
  border-radius: 50px;
}




</style>
 
</head>
<body>


  <div class="social">
     <ul>
      <li><a href="https://www.facebook.com/daniel.ramoschinga" class="icon-facebook" target="_blank" ></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=51963002290&text=Hola muy buena pagina web" target="_blank" class="icon-whatsapp" ></a></li>
      <li><a href="https://www.instagram.com/mathias_tlv/" class="icon-instagram" target="_blank" ></a></li>
      <li><a href="https://www.youtube.com" class="icon-youtube" target="_blank" ></a></li>
      <li><a href="https://www.spotify.com" class="icon-spotify" target="_blank" ></a></li>


  </ul>
  </div>
  


<!--/ Barra de navegacion/-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top navbar-reduce" id="mainNav">
    <div class="container">
   
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#Inicio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#Biografia">Biografia
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#Fotografías">Fotografías</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#Registrate">Registrate</a>
          </li>

          <li class="nav-item">
            <a data-toggle="modal" data-target="#exampleModal" class="nav-link js-scroll" >Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-------------------Modal------------------------>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div id="iniciar-sesion">
            <form action="iniciar.php" method="POST">
                <p class="h4 mb-4 text-center">Iniciar Sesión</p>

               
    <input type="text" class="form-control"   placeholder="usuario" name="usuario" required="">
    <br>  

   
    <input type="password" class="form-control"placeholder="contraseña" name="clave" required="">
    <br>
    <center><input type="submit" name="submit" class="btn btn-primary" style="width: 100%"></center>
                      
                
            </form>
            </div>


      </div>
    </div>
  </div>
</div>


<section id="Inicio">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/anuel.jpg" class="d-block w-100" alt="..">
    </div>
    <div class="carousel-item">
      <img src="img/karol.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bad.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
  </div>
</div>

<br>
<center>
  <h1>Biografias</h1>
</center>





<section id="Biografia">
<main>

<div class="container text-center  mt-5 mb-5">
  <div class="row  d-flex align-items-center justify-content-center">

  
    <div class="col-lg-6 col-xs-10 col-md-6 mt-5">
      <img src="img/ozuna.png" class="w-75 borde" alt="">
    </div>  

       <div class=" col-lg-6 col-xs-10 col-md-6">
      <h2 class="font-weight-bold ">OZUNA<span class="font-weight-bold"></h2>
      <p class="font-weight-bolder grey-text pt-3 pb-3">uan Carlos Ozuna Rosado es un cantante domínico-puertorriqueño de reggaetón y trap, conocido en el mundo musical por su nombre artístico Ozuna. Nació el 13 de marzo de 1992 en San Juan, Puerto Rico y es hijo de padres dominicanos. Mostró su interés por la música desde que tenía 12 años, cuando empezó a realizar composiciones de canciones, lo que lo motivó a prepararse para cumplir el sueño de ser cantante y ser reconocido en el mundo musical.</p>
    </div>

    </div>

  <main>
<div class="container text-center  mt-5 mb-5">
  <div class="row  d-flex align-items-center justify-content-center">

     <div class="col-lg-6 col-xs-10 col-md-6">
      <h2 class="font-weight-bold ">ARCANGEL<span class="font-weight-bold"></h2>
      <p class="font-weight-bolder grey-text pt-3 pb-3">Austin Agustín Santos, cantante, compositor, productor, empresario y actor, mejor conocido como “Arcángel”. Nació el 23 de diciembre de 1985 en la ciudad de Nueva York (Estados Unidos), pero se crió en Santurce (Puerto Rico) sus padres de origen dominicano llamados Austín Santos y Carmen Rosa, quien formó parte de la agrupación dominicana Las Chicas del Can.
Creció escuchando distintos tipos de música, interesado en convertirse en cantante de reggaetón.</p>
        
    </div>

    
    <div class="col-lg-6 col-xs-10 col-md-6 mt-5">
      <img src="img/arcangel.jpg" class="w-75 borde" alt="">
    </div>  

      </div>



  
  
<main>

<div class="container text-center  mt-5 mb-5">
  <div class="row  d-flex align-items-center justify-content-center">

  
    <div class="col-lg-6 col-xs-10 col-md-6 mt-5">
      <img src="img/maluma.jpg" class="w-75 borde" alt="">
    </div>  

       <div class="col-lg-6 col-xs-10 col-md-6">
      <h2 class="font-weight-bold ">MALUMA<span class="font-weight-bold"></h2>
      <p class="font-weight-bolder grey-text pt-3 pb-3">Juan Luis Londoño Arias, conocido popularmente como Maluma en el mundo artístico, es un cantante y compositor colombiano del genero reggaetón. Nació el 28 de enero de 1994 en Medellín, Colombia, es hijo de Marlli Arias y Luis Londoño y hermano de Manuela Londoño; de las silabas iniciales de los nombres de su familia viene el nombre artístico “Maluma”.</p>
        
    </div>

    </div>

</section>


       <div class="spinner-grow text-warning" role="status" style="width: 100%; height: 100%;">
  <span class="sr-only"></span>
  <h1 style="color: black;font-family: 'Bree Serif', serif;" align="center">Fotos</h1>
</div>

<br><br>




<section id="Fotografías">
  
<div id="containerEx3">
<div class="ex3">
<img alt="img0" src="img/balvin.jpg" />
<img alt="img1" src="img/ozuna.png" />
<img alt="img2" src="img/arcangel.jpg" />
<img alt="img3" src="img/maluma.jpg" />
<img alt="img3" src="img/maluma.jpg" />
<img alt="img3" src="img/maluma.jpg" />

</div>
</div>

</section>  



      

<br><br>


<section id="Registrate" style="background-color:#a1f4;">
  <br>
  <center>

  <h1>Registro</h1>
   
  </center>
 
  <div class="container" >
      <div class="row">
            <div class="col-md-12">
<form action="registro.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress"></label>
      <input type="text" class="form-control" id="inputAddress" name="usuario" placeholder="Usuario" required="" style="background-color: transparent; border: 1px solid black;">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" id="inputPassword4" name="clave" placeholder="contraseña" required="" style="background-color: transparent; ; border: 1px solid black;">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress"></label>
    <input type="text" class="form-control" id="inputAddress" name="telefono" placeholder="telefono" required="" style="background-color: transparent;; border: 1px solid black;">
  </div>
  <div class="form-group">
    <label for="inputAddress"> </label>
    <input type="text" class="form-control" id="inputAddress" name="direccion" placeholder="direccion" required="" style="background-color: transparent;; border: 1px solid black;">
  </div>
  
  <div class="form-group">
    <label for="inputAddress"> </label>
    <input type="text" class="form-control" id="inputAddress" name="ciudad" placeholder="ciudad" required="" style="background-color: transparent;; border: 1px solid black;">
  </div>
  <button type="submit" class="btn logbtn1 btn-rounded btn-block my-4 waves-effect z-depth-0" >Registrar</button><br>
</form>



            </div>        
      </div>
  </div>

</section>

<br><br>





  





















	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="
    sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="//code.tidio.co/ewygw3mwksu5j2qobqyimdzp3nzvlswo.js"></script>
</body>

</html>

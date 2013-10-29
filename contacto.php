<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Contact</title>
	<meta name="description" content="Equipos de maquinaria de artes gráficas">
	<meta name="author" content="Antorcha Web">
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<link href='http://fonts.googleapis.com/css?family=Magra' rel='stylesheet' type='text/css'>
</head>


<body>
	<?php
		$fildName = $_POST["name"];
		$fildEmail = $_POST["email"];
		$fildPhone = $_POST["phone"];
		$fildComment = $_POST["comment"];

		$to = "asistente@vhsdigital.com.co";
		$subject = "Contacto sitio web VHS";
		$message = "$fildName, Escribio: $fildComment. Su número de teléfono es: $fildPhone" ;

		mail($to, $subject, $message); 
	?>
	<div id="container" class="centrar">
		<header id="header">
			<div id="logo">
	            <a href="index.html"><img src="img/logovhs.png"/></a>
	        </div>
	        <nav id="menu">
	            <ul class="menuPrincipal" id="nav">
	                <li><a href="index.html">HOME</a></li>
	                 <li id="menuProductos">
                        <a  href="referencia.html">PRODUCTOS</a>
                        <ul>
                            <li><a href="categoria.html">Por categoria</a></li>
                            <li><a href="index.html#productosDis">Por fabricante</a></li>
                        </ul>
                    </li>
	                <li><a href="nosotros.html">NOSOTROS</a></li>   
	                <li><a href="index.html#contactenos">CONTÁCTENOS</a></li>        
	            </ul>
	        </nav>
		</header>
		<div id="mensaje">
			<p>Su mensaje ha sido enviado.</p>

			<p>Estaremos resolviendo sus inquietudes lo antes posible.</p>

			<p>Gracias por contactárnos.</p>
		</div>
	</div>
	<footer id="footer"> 
        <nav id="menuDatos">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="nosotros.html">QUIENES SOMOS</a></li>
                <li><a href="index.html#productosDis">PRODUCTOS</a></li>
                <li><a href="index.html#contactenos">CONTÁCTENOS</a></li>
                <li><a href="http://www.facebook.com/vhsdigitaltda.vhsdigital" id="fb" target="_blank"><img src="img/facebook.jpg"></a></li>        
            </ul>
        </nav>
        <div id="DatosEmpresa">
            <div id="logoFooter">
                <img src="img/vhs-gris.png">
            </div>
            <div id="contactFooter">
                <p><b>Direccion: </b>Carrera 57 No.44B-20 Bogotá DC<br>
                <b>Telefax: </b>57(1) 2215801/02<br>
                comercial@vhsdigital.com.co
                </p>
                </div>
        </div>
        <div id="creditos">
            <p>VHS Digital Ltda © 2013, specially mady by <a target="_blank" href="http://antorchaweb.com"></a></p>
        </div>
            
    </footer>
</body>
</html>

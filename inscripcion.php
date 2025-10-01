<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="language" content="es" />
		<meta http-equiv="content-language" content="Spanish"/>
		<link rel="shortcut icon" href="img/favicon.png">

		<title>Asociación Civil Dr. César Luis Carrasco Monsalva - Inscripcion</title>

		<!-- Bootstrap Core CSS -->
    	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<!-- Custom Fonts -->
	    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <title>Formulario de contacto</title>

	    <link rel="stylesheet" href="css/estilos.css">
	    <link rel="stylesheet" href="css/font-awesome.css">

	    <script src="js/jquery-3.2.1.js"></script>
	    <script src="js/script.js"></script>
	    
		<!-- Custom CSS -->
		<link href="css/estilo.css" rel="stylesheet">
		</body>
		</html>
	</head>
	<body id="page-top" class="index" style=" background-color: white;">
		<div class="container cuerpo_planilla">
			<header style="margin-top:5px;">
				<div class="container">
					<div id="logo-container">
	                	<img src="img/logos/logo.gif" class="img-responsive" id="log">
	                </div>
	                <div class="intro-text">
		                <div class="intro-lead-in">Asociación Civil</div>
		                <div class="intro-heading" style="font-size: 45px;">Dr. César Luis Carrasco Monsalva</div>
		                <div class="intro-rif">Rif. J-31034742-5 </div>                 
	            	</div> 
				</div>
			</header>
			<section>
				<div class="row" style="Background-color:white; width:90%; padding: 10px; margin:20px;">
				<form action="" method="post">
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="text" class="form-control" id="id" aria-describedby="id" placeholder=" &#128706; Cédula de Identidad" required autofocus >
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="text" class="form-control" id="nacionalidad" aria-describedby="nacionalidad" placeholder=" &#9873; Nacionalidad" required autocomplete="on">
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="text" class="form-control" id="nombre" aria-describedby="nombre" placeholder=" &#128100; Nombres" required autocomplete="on">
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="text" class="form-control" id="apellido" aria-describedby="apellido" placeholder=" &#128100; Apellidos" required autocomplete="on">
				  </div>
				  <div class="form-check col-lg-3 col-md-4 col-sm-6">
				  	<input type="radio" name="genero" value="M" id="genero">  	&#128697; Masculino
  					<input type="radio" name="genero" value="F" id="genero"> &#128698; Femenino 		  	
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="date" class="form-control" id="fecha_nac" aria-describedby="fecha_nac" placeholder=" &#128706; Fecha de Nacimiento">
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="text" class="form-control" id="dierccion" aria-describedby="direccion" placeholder=" &#127968; Dirección">
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <select class="custom-select" id="pais" placeholder="pais">
					   <option selected>Selecciona un País...</option>
					   <option value="1">Venezuela</option>
					   <option value="2">Colombia</option>
					   <option value="3">Chile</option>
					</select>
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <select class="custom-select" id="edo" placeholder="estado">
					   <option selected>Selecciona un Estado...</option>
					   <option value="1">Carabobo</option>
					   <option value="2">Barinas</option>
					   <option value="3">Tachira</option>
					</select>
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="tel" class="form-control" id="telefono" aria-describedby="telefono" placeholder=" &#9990; Teléfono"  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">				    
				    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="&#9993; Email" required>
				  </div>
				  <div class="form-group col-lg-3 col-md-4 col-sm-6">
				    <input type="text" class="form-control" id="prefesion" placeholder="&#127981; Profesión">
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			</section>
		</div>
		
	</body>
</html>	

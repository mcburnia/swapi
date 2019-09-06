<?php //require_once 'users/init.php';?>
<?php //require_once 'users/includes/navigation.php';?>
<?php //if (!securePage($_SERVER['PHP_SELF'])){die();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swapi Customer - Bookings</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="swapi.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- our personalised css style here - either internal style tags or link to an external css sheet-->
	<link rel="stylesheet" href="css/swapi.css">
</head>

<?php // require_once 'users/includes/navigation.php';?>
<?php require_once 'definitions.php';?>

<body onLoad="CustomerSession.initialise();">
<!-- Main application home page -->
<header>
    <div class="w3-container w3-left">
    	<p><a href="swapi.php"><img src="Images/logo_v6.png" width="125"/></a></p>
    </div>
</header>

<div id="booking" class="w3-container">
	<div class="w3-panel w3-leftbar w3-theme-d1 w3-xxlarge w3-serif">
	  <p><i>"Congratulations! Your booking is confirmed."</i></p>
	</div> 

<div class="w3-panel w3-row">
    <div class="w3-container w3-col s12 m6 l5 w3-small">
        <div class="w3-round-xlarge w3-row w3-white">
        	<h1 class="w3-center w3-text-theme" style="font-weight: 900;">TOYOTA RAV4</h1>
            <img id="selectedcarpicture" class="w3-image w3-padding" src="images/vehicles/toyotaRav4-500x375.png">
        </div>
    
    	<a onclick="CustomerSession.Accordion('selectedVehicleExtras')" class="w3-left-align w3-text-theme">
    		<i class='fas fa-search-plus w3-text-theme' style="font-size:12px;"></i>Ver todo equipamieto</a>
	    <div id="selectedVehicleExtras" class="w3-section w3-padding-16 w3-round-xlarge w3-theme-l4" style="display: block">
	    	<script>Bookings.ex1 = "Faros de activacion automatica y sensor de Iluvia";</script>
			<script>Bookings.ex2 = "Sensores de aparcamiento delanteros y traseros";</script>
			<script>Bookings.ex3 = "Faros antiniebla delanteros cromados";</script>
			<script>Bookings.ex4 = "Climatizardor dual (conductor / acomp.)";</script>
			<script>Bookings.ex5 = "ABS+EBD+ESP";</script>
			<script>Bookings.ex6 = "Indicador de presion de neumaticos";</script>
			<script>Bookings.ex7 = "Control de crucero y limitador de velocidad";</script>
			<script>Bookings.ex8 = "Asistente de arranque en pendiente";</script>
	        <ul class="fa-ul w3-tiny w3-hide-medium w3-hide-large">
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex1)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex2)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex3)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex4)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex5)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex6)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex7)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex8)</script></li>
	        </ul>
	        <ul class="fa-ul w3-small w3-hide-small">
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex1)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex2)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex3)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex4)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex5)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex6)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex7)</script></li>
	            <li><span class="fa-li"><i class="fas fa-check"></i></span><script>document.write(Bookings.ex8)</script></li>
	        </ul>
		</div>
		<div class="w3-section w3-row">
			<div class="w3-col s7 m7 l8">
		        <ul class="home-check-list w3-tiny w3-hide-medium w3-hide-large">
		            <li>Sin entrada</li>
		            <li>Seguro a todo riesgo</li>
		            <li>Asistencia en carretera</li>
		            <li>Mainenimiento y revisiones</li>
		            <li>Averias y reparaciones</li>
		            <li>Impuestos incluidos</li>
		            <li>Cambio de neumaticos</li>
		        </ul>
		        <ul class="home-check-list w3-small w3-hide-small">
		            <li>Sin entrada</li>
		            <li>Seguro a todo riesgo</li>
		            <li>Asistencia en carretera</li>
		            <li>Mainenimiento y revisiones</li>
		            <li>Averias y reparaciones</li>
		            <li>Impuestos incluidos</li>
		            <li>Cambio de neumaticos</li>
		        </ul>
			</div>
			<div class="w3-panel w3-col s5 m5 l4">
				<div class="seplarge w3-small"><i class="fas fa-gas-pump"></i>&nbsp;Hybrid</div>
				<div class="seplarge w3-small"><i class="fas fa-cogs"></i>&nbsp;Auto</div>
				<div class="seplarge w3-small"><i class="fas fa-door-open"></i>&nbsp;5 Puertas</div>		
				<div class="seplarge w3-small"><i class="fas fa-bolt"></i>&nbsp;&nbsp;120 cv.</div>
			</div>
		</div>
	</div>
	
	<div class="w3-container w3-col s12 m6 l7">
	<div class="w3-card w3-round-xlarge w3-padding w3-light-grey">
		<div>
			<p></p>
			<fieldset>
			<legend class="w3-text-theme w3-medium" style="font-weight: 900;">pago mensual de 580€ durante: 3 meses</legend>
				<ul>
					<li>TOYOTA RAV4 550€</li>
					<li>Franquicia: 30</li>
				</ul>
			<legend class="w3-text-theme w3-medium" style="font-weight: 900;">pago unico 75€</legend>
				<ul>
					<li>Conbustible 50€</li>
					<li>Entrega domicilio: 25</li>
					<li>Fianza 0€</li>
				</ul>
			</fieldset>
			<p></p>
			<div class="w3-bar w3-theme-dark w3-round-xlarge">
				<a href="customerdashboard.php" class="w3-bar-item w3-right" style="color:white;">My Dashboard...</a>
			</div>
		</div>
	</div>
	</div>
</div>
</div> <!-- End of TAB -->
    
<footer class="w3-container w3-center">
	<div class="w3-container">
    	<div class="w3-panel w3-padding w3-round-xlarge w3-white">
        	<div class="w3-text-grey w3-medium" style="text-align: justify; text-justify: inter-word;">
			Se acabó el pasarse horas y horas delante del ordenador buscando un vehículo entre un innumerable 
			número de ofertas de renting. Se acabó el desplazarte quilómetros y quilómetros para poder alquilar 
			ese automóvil. ¡Todo esto ya es cosa del pasado! Swapi te trae una experiencia de renting única, 
			adaptada a los tiempos de hoy y basada en la inmediatez y un trato cercano y personal.
			</div>
        	<div class="w3-panel w3-center w3-text-theme w3-small"><h3>Swapi, tu coche sin compromisos</h3></div>
        	<div class="w3-text-grey w3-medium" style="text-align: justify; text-justify: inter-word;">
			Swapi tu vehículo en cuota flexible para cada momento. Elige tu vehículo, el que mas se adapta a tus 
			necesidades y el tiempo que lo necesites. Es para las personas que quieren un coche sin obligaciones 
			a largo plazo o que quieran cambiar de coche según su estilo de vida. Viene con todo incluido, el 
			seguro con asistencia en carretera, los impuestos, el mantenimiento… Puedes cambiar el vehículo 
			cada mes si lo necesitas o decidir no tener coche. Pagas solo por los meses que decides tener tu 
			coche. También ofrecemos un servicio de entrega a domicilio.
			</div>
    	</div>	
    	<div class="w3-panel w3-block w3-theme-dark">
    		<h6>Copyright 2019 - Swapi</h6>
    	</div>
	</div>
</footer>
  
</body>
</html>

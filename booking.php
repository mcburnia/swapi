<?php //require_once 'users/init.php';?>
<?php //require_once 'users/includes/navigation.php';?>
<?php //if (!securePage($_SERVER['PHP_SELF'])){die();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swapi Customer - Bookings</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
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
<div class="w3-panel w3-row">
	<!-- column 1 -->
    <div class="w3-container w3-col s12 m6 l5 w3-small">
        <div class="w3-card w3-margin-bottom w3-round-xlarge w3-center w3-white w3-row">
        	<h1 class="w3-center w3-text-theme" style="font-weight: 900;">TOYOTA RAV4</h1>
            <img id="selectedcarpicture" class="w3-image w3-padding" src="images/vehicles/toyotaRav4-500x375.png">
        </div>
    
    	<a onclick="CustomerSession.Accordion('selectedVehicleExtras')" class="w3-left-align w3-text-theme">
    		<i class='fas fa-search-plus w3-text-theme' style="font-size:12px;"></i>Ver todo equipamieto</a>
	    <div id="selectedVehicleExtras" class="w3-card w3-margin-bottom w3-round-xlarge w3-theme-l4 w3-row" style="display: none">
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
		<form id="bookingform" class="w3-container" action="make_booking.php" method="POST">
		<div id="resumen" style="display: none">
			<div class="w3-bar">
				<a href="#" onclick="CustomerSession.WizardAccordion('coche', 'conductor', 'resumen');" class="w3-bar-item w3-xlarge w3-hide-medium">COCHE</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-xlarge w3-hide-medium">CONDUCTOR</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('resumen', 'coche', 'conductor');" class="w3-bar-item w3-xlarge w3-hide-medium disabled">RESUMEN</a>
			</div>
			<div class="w3-bar">
				<a href="#" onclick="CustomerSession.WizardAccordion('coche', 'conductor', 'resumen');" class="w3-bar-item w3-small w3-hide-small w3-hide-large">COCHE</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-small w3-hide-small w3-hide-large">CONDUCTOR</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('resumen', 'coche', 'conductor');" class="w3-bar-item w3-small w3-hide-small w3-hide-large disabled">RESUMEN</a>
			</div>
			<p></p>
			<fieldset>
			<legend class="w3-text-theme w3-medium" style="font-weight: 900;">pago mensual de 580€ durante: 3 meses</legend>
				<input id="priceagreed" class="w3-input"
					type="hidden"
					placeholder=""
					name="priceagreed"
					value="580.00"
					readonly>
				<ul>
					<li>TOYOTA RAV4 580€</li>
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
			<fieldset>
			<legend class="w3-text-theme w3-medium" style="font-weight: 900;">Payment Card Details</legend>
				<div>
				<input id="pcinumber" class="w3-input w3-border"
					type="text"
					placeholder="16 Digit Card Number"
					name="pcinumber"
					value=""
					readonly>
				</div>
				<div>
				<input id="pciname" class="w3-input w3-border"
					type="text"
					placeholder="Card holder's name"
					name="pciname"
					value=""
					readonly>
				</div>
				<div>
				<label class="w3-text-theme w3-medium" style="font-weight: 900;">Expiry date:
				<input id="pciexpdate" class="w3-input w3-border"
					type="date"
					placeholder="Exiry date"
					name="pciexpdate"
					value=""
					readonly></label>
				</div>
				<div>
				<input id="pciccv" class="w3-input w3-border"
					type="text"
					placeholder="CCV Code"
					name="pciccv"
					value=""
					readonly>
				</div>
			</fieldset>
			<p></p>
			<div class="w3-bar w3-theme-dark w3-round-xlarge">
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-button" style="color:white;">Back</a>
				<a href="#" onclick="document.getElementById('bookingform').submit();" class="w3-bar-item w3-button w3-right" style="color:white;">Complete booking...</a>
			</div>
		</div>
		<div id="conductor" style="display: none">
			<div class="w3-bar">
				<a href="#" onclick="CustomerSession.WizardAccordion('coche', 'conductor', 'resumen');" class="w3-bar-item w3-xlarge w3-hide-medium">COCHE</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-xlarge w3-hide-medium disabled">CONDUCTOR</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('resumen', 'coche', 'conductor');" class="w3-bar-item w3-xlarge w3-hide-medium">RESUMEN</a>
			</div>
			<div class="w3-bar">
				<a href="#" onclick="CustomerSession.WizardAccordion('coche', 'conductor', 'resumen');" class="w3-bar-item w3-small w3-hide-small w3-hide-large">COCHE</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-small w3-hide-small w3-hide-large disabled">CONDUCTOR</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('resumen', 'coche', 'conductor');" class="w3-bar-item w3-small w3-hide-small w3-hide-large">RESUMEN</a>
			</div>
			<p></p>
			<fieldset>
			<legend class="w3-text-theme w3-medium" style="font-weight: 900;">Driver details:</legend>
				<div>
				<input id="drivername" class="w3-input w3-border"
					type="text"
					placeholder="Name"
					name="drivername"
					value="Andi"
					required readonly>
				</div>
				<div>
				<input id="driversurname" class="w3-input w3-border"
					type="text"
					placeholder="Surname"
					name="driversurname"
					value="McBurnie"
					required readonly>
				</div>
				<div>
				<input id="driveremail" class="w3-input w3-border"
					type="text"
					placeholder="Email"
					name="driveremail"
					value="andi@mcburnie.com"
					required readonly>
				</div>
			</fieldset>
			<fieldset>
			<legend></legend>
				<div>
					<label class="w3-text-theme w3-medium" style="font-weight: 900;">Start date:
					<input id="startdate" name="startdate" class="w3-input w3-border" type="date" required></label>
				</div>
				<div>
					<label class="w3-text-theme w3-medium" style="font-weight: 900;">Start time:
					<input id="starttime" name="starttime" class="w3-input w3-border" type="time" required></label>
				</div>
			</fieldset>
			<p></p>
			<fieldset>
			<legend class="w3-text-theme w3-medium" style="font-weight: 900;">Deliver to me:</legend>
			<div class="w3-bar">
				<div class="w3-bar-item w3-mobile">
					<label class="container">Si
						<input class="w3-radio" type="radio" name="delivery" onclick="CustomerSession.Accordion('deliveryaddress');" value="true" />
					</label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">No
						<input class="w3-radio" type="radio" name="delivery" onclick="CustomerSession.Accordion('deliveryaddress')" value="false" checked/>
					</label>
				</div>
			</div>
			</fieldset>
			<fieldset id="deliveryaddress" style="display: none">
			<legend class="w3-text-theme w3-medium" style="font-weight: 900;">Delivery Address:</legend>
				<div>
				<input id="address1" class="w3-input w3-border"
					type="text"
					placeholder="Full delivery address"
					name="address1"
					value="La Vallee, Sourdeval, France"
					required>
				</div>
				<div>
				<input id="address2" class="w3-input w3-border"
					type="text"
					placeholder="Postal code"
					name="address2"
					value="50150"
					required>
				</div>
			</fieldset>
			<div class="w3-bar w3-theme-dark w3-round-xlarge">
				<a href="#" onclick="CustomerSession.WizardAccordion('coche', 'conductor', 'resumen');" class="w3-bar-item w3-button" style="color:white;">Back</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('resumen', 'coche', 'conductor');" class="w3-bar-item w3-button w3-right" style="color:white;">Next...</a>
			</div>
		</div>
		<div id="coche">
			<div class="w3-bar">
				<a href="#" onclick="CustomerSession.WizardAccordion('coche', 'conductor', 'resumen');" class="w3-bar-item w3-xlarge w3-hide-medium disabled">COCHE</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-xlarge w3-hide-medium">CONDUCTOR</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('resumen', 'coche', 'conductor');" class="w3-bar-item w3-xlarge w3-hide-medium">RESUMEN</a>
			</div>
			<div class="w3-bar">
				<a href="#" onclick="CustomerSession.WizardAccordion('coche', 'conductor', 'resumen');" class="w3-bar-item w3-small w3-hide-small w3-hide-large disabled">COCHE</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-small w3-hide-small w3-hide-large">CONDUCTOR</a>
				<a href="#" onclick="CustomerSession.WizardAccordion('resumen', 'coche', 'conductor');" class="w3-bar-item w3-small w3-hide-small w3-hide-large">RESUMEN</a>
			</div>
			<p></p>
			<div class="w3-text-theme w3-medium" style="font-weight: 900;">Duration renting</div>
            <p></p>
            <div class="w3-bar">
				<div class="w3-bar-item w3-mobile">
					<label class="container">1 Mes<input class="w3-radio" type="radio" name="duration" value="1"/></label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">2 Meses<input class="w3-radio" type="radio" name="duration" value="2"/></label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">3 Meses<input class="w3-radio" type="radio" name="duration" value="3" checked /></label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">6 Meses<input class="w3-radio" type="radio" name="duration" value="6"/></label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">12 Meses<input class="w3-radio" type="radio" name="duration" value="12"/></label>
				</div>
			</div>
			<p></p>
			<div class="w3-text-theme w3-medium" style="font-weight: 900;">Km's mensuales</div>
            <p></p>
            <div class="w3-bar">
				<div class="w3-bar-item w3-mobile">
					<label class="container">1500<input class="w3-radio" type="radio" name="distance" value="1500" checked /></label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">2000<input class="w3-radio" type="radio" name="distance" value="2000"/></label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">2500<input class="w3-radio" type="radio" name="distance" value="2500"/></label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">3000<input class="w3-radio" type="radio" name="distance" value="3000"/></label>
				</div>
			</div>
			<p></p>
			<div class="w3-text-theme w3-medium" style="font-weight: 900;">Reduce tu franquicia de 300€ a 0€</div>
			<p></p>
			<div class="w3-bar">
				<div class="w3-bar-item w3-mobile">
					<label class="container">Si
						<input class="w3-radio" type="radio" name="allrisks" value="true" checked />
					</label>
				</div>
				<div class="w3-bar-item w3-mobile">
					<label class="container">No
						<input class="w3-radio" type="radio" name="allrisks" value="false" />
					</label>
				</div>
			</div>
			<p></p>
			<div class="seplarge w3-margin w3-text-theme w3-small">
			Has elegido reducir to franquicia de 300€ a 0€, por apenas 30€ mas al mes.
			De esta forma, has eliminado tu responsabilidad en caso de accidente o dano.
			</div>
			<p></p>
			<div class="w3-margin w3-center w3-text-theme w3-large" style="font-weight: 900;">
			Total por mes: 580€
			</div>
			<p></p>
			<div class="w3-margin w3-center w3-text-theme w3-large" style="font-weight: 900;">
			Durante 3 meses
			</div>
			<div class="w3-bar w3-theme-dark w3-round-xlarge">
				<a href="#" onclick="CustomerSession.WizardAccordion('conductor', 'coche', 'resumen');" class="w3-bar-item w3-button w3-right" style="color:white;">Next...</a>
			</div>
		</div>
		</form>
	</div>
	</div>
</div>
</div> <!-- End of booking -->
    
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

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
    <!-- our personalised css style here - either internal style tags or link to an external css sheet w3-theme-cyan-->
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
    <!-- 
    Tab section to move between booking tab and customer profile tab without reloading and pages
    or page data.
     -->
    <div class="w3-bar">
        <button class="w3-bar-item w3-button tablink w3-theme" onclick="CustomerSession.switchTab(event,'dashboard');">Dashboard</button>
        <button class="w3-bar-item w3-button tablink" onclick="CustomerSession.switchTab(event,'history');">Booking history</button>
        <button class="w3-bar-item w3-button tablink" onclick="CustomerSession.switchTab(event,'profile');">Profile</button>
    </div>
</header>

<div id="history" class="w3-container tab" style="display:none">
	<div class="w3-panel w3-row">
		<!-- column 1 -->
	    <div class="w3-container w3-col s12 m6 l5 w3-small">
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-center w3-white w3-row">
				<h1 class="w3-center w3-text-theme" style="font-weight: 900;">Booking History</h1>
				<div class="w3-row-padding w3-margin-top">
					<div class="w3-half">
						<div class="w3-card w3-round-xlarge">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/5008-519x389.png" style="width:90%">
							</div>
						</div>
					</div>
				
					<div class="w3-half">
						<div class="w3-card w3-round-xlarge">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/508-1-500x375.png" style="width:90%">
							</div>
						</div>
					</div>
				</div>
				<div class="w3-row-padding w3-margin-top">
					<div class="w3-half">
						<div class="w3-card w3-round-xlarge">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/bmv_serie1i-500x375.png" style="width:90%">
							</div>
						</div>
					</div>

					<div class="w3-half">
						<div class="w3-card w3-round-xlarge">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/BMW-X2-SDrive-20d-2018-1-519x389.png" style="width:90%">
							</div>
						</div>
					</div>
				</div>
				<!-- x<img id="selectedcarpicture" class="w3-image w3-padding" style="width:90%" src="images/vehicles/dealerphoto.png"> -->
				<p class="w3-panel"></p>
			</div>
			<p></p>
			<select id="bookinghistory" onchange="Bookings.loadBookingData();">
			</select>
			<p></p>
		</div>
		
		<!-- column 2 -->
		<div class="w3-container w3-col s12 m6 l7">
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-padding w3-theme-l4">
				<!-- Vehicle display form -->
				<div class="w3-section">
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Start Date:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="startdate"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Rental duration:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="duration"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Brand:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="brand"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Model:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="model"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Total rental kilometers:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="final_distance"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Final cost of rental:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="final_rental_price"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">All risks cover:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="allrisks"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Price agreed per month:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="priceagreed"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Delivered:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="delivery"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Address:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="address1"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Postcode:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="address2"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Drive name:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="drivername"></span>
					</div>
					<div class="w3-bar">
						<span class="w3-bar-item w3-large thicker">Driver surname:&nbsp;</span>
						<span class="w3-bar-item w3-large w3-right" id="driversurname"></span>
					</div>
				</div>
	    	</div>
	    </div>
	</div>
</div><!-- history tab end -->

<div id="dashboard" class="w3-container tab">
	<div class="w3-panel w3-row">
		<!-- Column 1 -->
	    <div class="w3-container w3-col s12 m6 l5 w3-small">
	        <div class="w3-card w3-margin-bottom w3-round-xlarge w3-white w3-row">
	        	<h1 class="w3-center w3-text-theme" style="font-weight: 900;">TOYOTA RAV4</h1>
	            <img id="selectedcarpicture" class="w3-image w3-padding" src="images/vehicles/toyotaRav4-500x375.png">
				<p class="w3-panel"></p>
	        </div>
	    
	    	<a onclick="CustomerSession.Accordion('selectedVehicleExtras')" class="w3-left-align w3-text-theme">
	    		<i class='fas fa-search-minus w3-text-theme' style="font-size:12px;"></i>Ver todo equipamieto</a>
		    <div id="selectedVehicleExtras" class="w3-card w3-margin-bottom w3-round-xlarge w3-theme-l4 w3-row" style="display: block">
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
		<!-- Column 2 -->
		<div class="w3-container w3-col s12 m6 l7">
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-padding w3-light-grey">
				<div id="resumen">
					<h1>Current Vehicle Summary</h1>
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
				</div>
			</div>
		</div>
		
		<div class="w3-container w3-padding w3-col s12 m6 l7">
			<div class="w3-card w3-round-xlarge w3-padding w3-light-grey">
				<h3>Time for a Swapi?</h3>
				<div class="w3-row-padding w3-margin-top">
					<div class="w3-third">
						<div class="w3-card">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/5008-519x389.png" style="width:90%">
							</div>
							<div class="w3-container">
								<h6>Peugeot 5008 Crossover</h6>
							</div>
						</div>
					</div>
				
					<div class="w3-third">
						<div class="w3-card">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/508-1-500x375.png" style="width:90%">
							</div>
							<div class="w3-container">
								<h6>Puegeot 508 Break</h6>
							</div>
						</div>
					</div>
				
					<div class="w3-third">
						<div class="w3-card">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/bmv_serie1i-500x375.png" style="width:90%">
							</div>
							<div class="w3-container">
								<h6>BMW 1 Series Break</h6>
							</div>
						</div>
					</div>
				</div>
				
				<div class="w3-row-padding w3-margin-top">
					<div class="w3-third">
						<div class="w3-card">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/BMW-X2-SDrive-20d-2018-1-519x389.png" style="width:90%">
							</div>
							<div class="w3-container">
								<h6>BMW X2 SDrive</h6>
							</div>
						</div>
					</div>
				
					<div class="w3-third">
						<div class="w3-card">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/Nissan_Xtrail-500x375.png" style="width:90%">
							</div>
							<div class="w3-container">
								<h6>Nissan Xtrail Crossover</h6>
							</div>
						</div>
					</div>
				
					<div class="w3-third">
						<div class="w3-card">
				    		<div class="w3-container w3-centre">
								<img src="images/vehicles/qashqai-519x389.png" style="width:90%">
							</div>
							<div class="w3-container">
								<h6>Nissan QaskQai</h6>
							</div>
						</div>
					</div>
					
					<div class="w3-bar">
						<a href="#" onclick="" class="w3-bar-item w3-button w3-right">more...</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div> <!-- End of TAB -->

<div id="profile" class="w3-container tab" style="display:none">
	<div class="w3-panel w3-row">
		<!-- column 1 -->
	    <div class="w3-container w3-col s12 m6 l5 w3-small">
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-center w3-white w3-row">
				<h1 class="w3-center w3-text-theme" style="font-weight: 900;">User Profile</h1>
				<img id="selectedcarpicture" class="w3-image w3-padding  w3-round-xlarge" style="width:90%" src="images/andiprofile.png">
				<p class="w3-panel"></p>
			</div>
		</div>
		
		<!-- column 2 -->
	    <!-- Customer profile form -->
	    <div class="w3-container w3-col s12 m6 l7">
				<div class="w3-card w3-margin-bottom w3-round-xlarge w3-padding w3-theme-l4">
		        <form id="customerprofileform" class="w3-container" action="update_customer.php" method="POST">
		            <div class="w3-section">
		            	<fieldset>
		            	<legend>Customer Details</legend>
		                    <div>
		                        <input id="cvisiblename" class="w3-input w3-border"
		                               type="text"
		                               placeholder="User Name"
		                               name="cvisiblename"
		                               value=""
		                               required readonly>
		                    </div>
		                    <div>
		                        <input id="cfname" class="w3-input w3-border"
		                               type="text"
		                               placeholder="Name"
		                               name="cfname"
		                               value="Andi"
		                               required readonly>
		                    </div>
		                    <div>
		                        <input id="csname" class="w3-input w3-border"
		                               type="text"
		                               placeholder="Surname"
		                               name="csname"
		                               value="McBurnie"
		                               required readonly>
		                    </div>
		                    <div>
		                        <input id="cemail" class="w3-input w3-border"
		                               type="text"
		                               placeholder="Email"
		                               name="cemail"
		                               value="andi@mcburnie.com"
		                               required readonly>
		                    </div>
		                    <div>
		                        <input id="cmobile" class="w3-input w3-border"
		                               type="text"
		                               placeholder="Mobile number"
		                               name="cmobile"
		                               value="+33 (0)771 052813"
		                               required readonly>
		                    </div>
		                    <div>
		                    <label><b>Password</b></label>
		                        <input id="cpassword" class="w3-input w3-border"
		                               type="password"
		                               placeholder=""
		                               name="cpassword"
		                               value=")(*&P0o9i8u7y"
		                               required readonly>
		                    </div>
		                    <div>
		                    	<label><b>Id Card</b></label>
		                        <input id="cidcard" class="w3-input w3-border"
		                               type="file"
		                               name="cidcard"
		                               required>
		                    </div>
		                    <div>
		                        <input id="clicensenumber" class="w3-input w3-border"
		                               type="text"
		                               placeholder="License number"
		                               name="clicensenumber"
		                               value="MCBUR611104AL9NP"
		                               required readonly>
		                    </div>
		                </fieldset>
		                <fieldset>
							<legend>Address:</legend>
		    				<div>
		                        <input id="caddress1" class="w3-input w3-border"
		                               type="text"
		                               placeholder="First line of address"
		                               name="caddress1"
		                               value="La Vallee"
		                               required readonly>
		                    </div>
		    				<div>
		                        <input id="caddress2" class="w3-input w3-border"
		                               type="text"
		                               placeholder="Second line of address"
		                               name="caddress2"
		                               value="50150"
		                               required readonly>
		                    </div>
		    				<div>
		                        <input id="cregion" class="w3-input w3-border"
		                               type="text"
		                               placeholder="Region"
		                               name="cregion"
		                               value="Sourdeval"
		                               required readonly>
		                    </div>
		                    <div>
		                        <input id="ccountry" class="w3-input w3-border"
		                               type="text"
		                               placeholder="Country"
		                               name="ccountry"
		                               value="France"
		                               required readonly>
		                    </div>
		                </fieldset>
		                <div>
		                    <!-- <label><b>Reference</b></label> -->
		                    <input id="did" class="w3-input w3-border"
		                           type="hidden"
		                           placeholder="Company Reference"
		                           name="did"
		                           value=""
		                           required>
		                </div>
		                <button id="editbutton" class="profile w3-button w3-theme w3-padding" onClick="CustomerSession.EditMode('profile', true);">Edit</button>
		                <button id="savebutton" class="profile w3-button w3-theme w3-padding" onClick="CustomerSession.EditMode('profile', false);" type="submit" style="display: none">Save</button>
		            </div>
		        </form>
		    </div>
		</div>
	</div>
</div>
    
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

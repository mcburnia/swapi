<?php //require_once 'users/init.php';?>
<?php //require_once 'users/includes/navigation.php';?>
<?php //if (!securePage($_SERVER['PHP_SELF'])){die();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swapi</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' 
    		integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' 
    		crossorigin='anonymous'>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="swapi.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- our personalised css style here - either internal style tags or link to an external css sheet-->
	<link rel="stylesheet" href="css/swapi.css">
	
</head>
<body>
<!-- Main application home page -->
<?php // require_once 'users/includes/navigation.php';?>
<div data-role="page" id="Home">

	<!-- UserSpice Navigation -->
	
    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large">Cerrar &times;</button>
        <a onclick="w3_close()" href="#" class="w3-bar-item w3-button">Sobre nosotros</a>
        <a onclick="w3_close()" href="#" class="w3-bar-item w3-button">Vehículos</a>
        <a onclick="w3_close()" href="customer.php" class="w3-bar-item w3-button">Customer Login</a>
        <a onclick="w3_close()" href="dealer.php" class="w3-bar-item w3-button">Dealer Login</a>
        <a onclick="w3_close()" href="#" class="w3-bar-item w3-button">Registro</a>
    </div>
  
    <div class="w3-container w3-left">
        <p><a href="swapi.php"><img src="Images/logo_v6.png" width="125"/></a></p>
    </div>
    <div class="w3-container w3-right">
        <!-- menu -->
        <button class="w3-button w3-small" onclick="w3_open()">☰</button>
    </div>
    <div class="w3-container w3-center">
        <!-- main image -->
        <img src="photos/1-series.jpeg" width="100%"/>
    </div>
    
    
    <div class="w3-container w3-center w3-margin" data-role="main" class="ui-content">
            <div class="w3-text-theme w3-xlarge"><b>¿Qué es Swapi?</b></div>
            <div>
            <?php 
            // $db = DB::getInstance();
            // $test = $db->query("SELECT * FROM settings LIMIT 1")->first();
            // dump($test);
            ?>
            </div>
    </div>
    
    
    <div class="w3-container w3-margin" data-role="main" class="ui-content">
        <ul class="home-check-list">
            <li>Tu vehículo con cuota flexible</li>
            <li>Sin compromisos</li>
            <li>Se adapta a tus necesidades</li>
            <li>Cambia cada mes</li>
            <li>Te llevamos el coche a casa</li>
            <li>Con todo incluido</li>
        </ul>
    </div>
    
    
    <div class="w3-container w3-margin" data-role="main" class="ui-content">
        <table cellpadding="5" cellspacing="0" border="0">
        <tr>
            <td>
                <img src="images/carsearch.png" width="50"/>
            </td>
            <td>
                <div class="w3-text-theme"><b>ESCOGE</b></div>
                <div><b>Selecciona</b> un vehículo de nuestra oferta</div>
            </td>
        </tr>

        <tr>
            <td>
                <img src="images/choosedirection.png" width="50"/>
            </td>
            <td>
                <div class="w3-text-theme"><b>RESERVA</b></div>
                <div><b>Registra</b> en nuestra página</div>
            </td>
        </tr>

        <tr>
            <td>
                <img src="images/starcar.png" width="50"/>
            </td>
            <td>
                <div class="w3-text-theme"><b>DISFRUTA</b></div>
                <div>Te entregamos tu <b>vehículo</b> con <b>todo incluido</b></div>
            </td>
        </tr>

        <tr>
            <td>
                <img src="images/decisions.png" width="50"/>
            </td>
            <td>
                <div class="w3-text-theme"><b>DECIDES</b></div>
                <div>Lo <b>renuevas</b>, lo <b>devuelves</b> o lo <b>cambias</b></div>
            </td>
        </tr>
        </table>
    </div>
    
    
    <div class="w3-container">
    	<div class=w3-card>
    	<div class="w3-bar w3-centre">
            <div class="w3-bar-item"><img class="w3-image" src="images/marques/0000_concesionario-bmw-barcelona.jpg"></div>
            <div class="w3-bar-item"><img class="w3-image" src="images/marques/0000_concesionario-peugeot-barcelona.png"></div>
            <div class="w3-bar-item"><img class="w3-image" src="images/marques/0000_concesionario-nissan-barcelona.png"></div>
            <div class="w3-bar-item"><img class="w3-image" src="images/marques/0000_concesionario-toyota-barcelona.jpg"></div>
        </div>
    	<div class="w3-bar">
            <div class="w3-bar-item"><img class="w3-image w3-grayscale-max w3-opacity-max" src="images/marques/0000_concesionario-hyundai-barcelona.jpg"></div>
            <div class="w3-bar-item"><img class="w3-image w3-grayscale-max w3-opacity-max" src="images/marques/0000_concesionario-citroen-barcelona.png"></div>
            <div class="w3-bar-item"><img class="w3-image w3-grayscale-max w3-opacity-max" src="images/marques/0000_concesionario-audi-barcelona.jpg"></div>
            <div class="w3-bar-item"><img class="w3-image w3-grayscale-max w3-opacity-max" src="images/marques/0000_concesionario-honda-barcelona.jpg"></div>
        </div>
    	</div>
	</div>
	
	
	<div class="w3-container w3-padding-32 w3-center">
    	<div class="w3-panel">
    		<div class="w3-text-theme w3-large"><b>¿Cómo quieres moverte?</b></div>
    		<div class="w3-text-grey w3-medium"><b>Elije tu estilo de movilidad</b></div>
    	</div>
	</div>
	
	
    <div class="w3-container">
    	<div class=w3-card>
    	<div class="w3-row-padding">
            <div class="w3-col s3"><img class="w3-image" src="images/features/eco.png"></div>
            <div class="w3-col s3"><img class="w3-image" src="images/features/7place.png"></div>
            <div class="w3-col s3"><img class="w3-image" src="images/features/suvtyres.png"></div>
            <div class="w3-col s3"><img class="w3-image" src="images/features/diamond.png"></div>
        </div>
    	</div>
	</div>
	
	<div class="w3-section">
    	<div class="w3-panel w3-center w3-theme" style="position:relative;top:+30px">
        	<div class="w3-text-white w3-xxlarge"><b>TOP Swapi</b></div>
    	</div>
    	<div class="w3-center w3-text-theme">
        	<div><i class='fas fa-caret-down' style='font-size:36px'></i></div>
    	</div>
	</div>
	
	<!-- Start of top swapi -->
	<div class="w3-bar w3-center" style="position:relative;top:-30px">
		<!-- Start of dynamic card -->
		<!-- Loop here through each record returned from top_swapi view in the db -->
        <div class="w3-bar-item">
        	<div class="w3-card w3-center w3-round-xlarge" style="max-width: 480px;">
        		<div><img class="w3-image" style="width:90%" src="images/vehicles/toyotaRav4-500x375.png"></div>
        		<div class="w3-container">
        			<button class="w3-button w3-white w3-border-theme w3-round-xxlarge" 
        			onClick="window.location.href='/UserSpice44/booking.php'">Toyota RAV4</button>
        		</div>
        		<div class="w3-panel w3-text-grey w3-medium w3-center">
        			<b class="w3-text-theme">desde 540€</b> /mes IVA incl.
        		</div>
        		<div>&nbsp;</div>
        	</div>
    	</div>
    	<!-- End of dynamic card -->
        <div class="w3-bar-item">
        	<div class="w3-card  w3-center w3-round-xlarge" style="max-width: 480px;">
        		<div><img class="w3-image" style="width:90%" src="images/vehicles/Nissan_Xtrail-500x375.png"></div>
        		<div class="w3-container">
        			<button class="w3-button w3-white w3-border-theme w3-round-xxlarge">Nissan X Trail</button>
        		</div>
        		<div class="w3-panel w3-text-grey w3-medium w3-center">
        			<b class="w3-text-theme">desde 510€</b> /mes IVA incl.
        		</div>
        		<div>&nbsp;</div>
        	</div>
    	</div>
        <div class="w3-bar-item">
        	<div class="w3-card  w3-center w3-round-xlarge" style="max-width: 480px;">
        		<div><img class="w3-image" style="width:90%" src="images/vehicles/5008-519x389.png"></div>
        		<div class="w3-container">
        			<button class="w3-button w3-white w3-border-theme w3-round-xxlarge">Peugeot 5008</button>
        		</div>
        		<div class="w3-panel w3-text-grey w3-medium w3-center">
        			<b class="w3-text-theme">desde 520€</b> /mes IVA incl.
        		</div>
        		<div>&nbsp;</div>
        	</div>
    	</div>
        <div class="w3-bar-item">
        	<div class="w3-card  w3-center w3-round-xlarge" style="max-width: 480px;">
        		<div><img class="w3-image" style="width:90%" src="images/vehicles/508-1-500x375.png"></div>
        		<div class="w3-container">
        			<button class="w3-button w3-white w3-border-theme w3-round-xxlarge">Peugeot 508</button>
        		</div>
        		<div class="w3-panel w3-text-grey w3-medium w3-center">
        			<b class="w3-text-theme">desde 694€</b> /mes IVA incl.
        		</div>
        		<div>&nbsp;</div>
        	</div>
    	</div>
        <div class="w3-bar-item">
        	<div class="w3-card  w3-center w3-round-xlarge" style="max-width: 480px;">
        		<div><img class="w3-image" style="width:90%" src="images/vehicles/bmv_serie1i-500x375.png"></div>
        		<div class="w3-container">
        			<button class="w3-button w3-white w3-border-theme w3-round-xxlarge">BMW 118i</button>
        		</div>
        		<div class="w3-panel w3-text-grey w3-medium w3-center">
        			<b class="w3-text-theme">desde 620€</b> /mes IVA incl.
        		</div>
        		<div>&nbsp;</div>
        	</div>
    	</div>
        <div class="w3-bar-item">
        	<div class="w3-card  w3-center w3-round-xlarge" style="max-width: 480px;">
        		<div><img class="w3-image" style="width:90%" src="images/vehicles/BMW-X2-SDrive-20d-2018-1-519x389.png"></div>
        		<div class="w3-container">
        			<button class="w3-button w3-white w3-border-theme w3-round-xxlarge">X2 sDrive18i</button>
        		</div>
        		<div class="w3-panel w3-text-grey w3-medium w3-center">
        			<b class="w3-text-theme">desde 725€</b> /mes IVA incl.
        		</div>
        		<div>&nbsp;</div>
        	</div>
    	</div>
        <div class="w3-bar-item">
        	<div class="w3-card  w3-center w3-round-xlarge" style="max-width: 480px;">
        		<div><img class="w3-image" style="width:90%" src="images/vehicles/qashqai-519x389.png"></div>
        		<div class="w3-container">
        			<button class="w3-button w3-white w3-border-theme w3-round-xxlarge">Nissan QUASHQAI</button>
        		</div>
        		<div class="w3-panel w3-text-grey w3-medium w3-center">
        			<b class="w3-text-theme">desde 480€</b> /mes IVA incl.
        		</div>
        		<div>&nbsp;</div>
        	</div>
    	</div>
	</div>

    <!-- End of top swapi -->	
	<div class="w3-center w3-text-theme" style="position:relative;top:-30px">
    	<div><i class='fas fa-caret-up' style='font-size:36px'></i></div>
	</div>


	<div class="w3-section" style="position:relative;top:-30px">
        <div class="w3-container">
        	<div class="w3-panel w3-center">
        		<div class="w3-text-theme w3-small"><b>¿A qué opcional no quieres renunciar?</b></div>
        		<div class="w3-text-grey w3-small">Empieza eligiendo un opcional entre los sugeridos</div>
        	</div>
    	</div>
        <div class="w3-container">
        	<div class=w3-card>
        	<div class="w3-row-padding">
                <div class="w3-col s2"><img class="w3-image" src="images/features/aircon.png"></div>
                <div class="w3-col s2"><img class="w3-image" src="images/features/antitheft.png"></div>
                <div class="w3-col s2"><img class="w3-image" src="images/features/automatic.png"></div>
                <div class="w3-col s2"><img class="w3-image" src="images/features/bluetooth.png"></div>
                <div class="w3-col s2"><img class="w3-image" src="images/features/proximitysensors.png"></div>
                <div class="w3-col s2"><img class="w3-image" src="images/features/cruisecontrol.png"></div>
            </div>
        	</div>
    	</div>
	</div>
	
	
	<div class="w3-panel w3-grey">
		<h3 class="w3-text-white">Encuentra la oferta perfecta para ti.</h3>
		<button class="w3-button w3-white w3-border-theme w3-round-xxlarge">BUSCAR OFERTAS</button>
	</div>
	
	
    <div class="w3-container">
    	<div class="w3-row">
            <div class="w3-col w3-section w3-display-container s12 m6 l4"><img class="w3-card w3-image w3-round-large" src="images/citybreaks/barcelona.jpg">
            <div class="w3-text-white w3-padding w3-display-middle"><h3>BARCELONA</h3></div></div>
            <div class="w3-col w3-section w3-display-container s12 m6 l4"><img class="w3-card w3-image w3-round-large" src="images/citybreaks/madrid.jpg">
            <div class="w3-text-white w3-padding w3-display-middle"><h3>MADRID</h3></div></div>
            <div class="w3-col w3-section w3-display-container s12 m6 l4"><img class="w3-card w3-image w3-round-large" src="images/citybreaks/valencia.jpg">
            <div class="w3-text-white w3-padding w3-display-middle"><h3>VALENCIA</h3></div></div>
        </div>
    	<div class="w3-row">
            <div class="w3-col w3-section w3-display-container s12 m6 l4"><img class="w3-card w3-image w3-round-large" src="images/citybreaks/girona.jpg">
            <div class="w3-text-white w3-padding w3-display-middle"><h3>GIRONA</h3></div></div>
            <div class="w3-col w3-section w3-display-container s12 m6 l4"><img class="w3-card w3-image w3-round-large" src="images/citybreaks/seville.jpg">
            <div class="w3-text-white w3-padding w3-display-middle"><h3>SEVILLE</h3></div></div>
            <div class="w3-col w3-section w3-display-container s12 m6 l4"><img class="w3-card w3-image w3-round-large" src="images/citybreaks/segovia.jpg">
            <div class="w3-text-white w3-padding w3-display-middle"><h3>SEGOVIA</h3></div></div>
        </div>
	</div>
	

	<div class="w3-section">
    	<div class="w3-panel w3-center w3-theme">
        	<div class="w3-text-white"><h4>TE LLEVAMOS EL COCHE A LA PUERTA DE TU CASA</h4></div>
    	</div>
    	<div class="w3-center w3-text-theme" style="position:relative;top:-30px">
        	<div><i class='fas fa-caret-down' style='font-size:36px'></i></div>
    	</div>
	</div>


	<div class="w3-container" style="position:relative;top:-30px">
    	<div class="w3-panel w3-left">
        	<div class="w3-text-grey w3-medium">
			Se acabó el pasarse horas y horas delante del ordenador buscando un vehículo entre un innumerable 
			número de ofertas de renting. Se acabó el desplazarte quilómetros y quilómetros para poder alquilar 
			ese automóvil. ¡Todo esto ya es cosa del pasado! Swapi te trae una experiencia de renting única, 
			adaptada a los tiempos de hoy y basada en la inmediatez y un trato cercano y personal.
			</div>
        	<div class="w3-panel w3-center w3-text-theme w3-small"><h3>Swapi, tu coche sin compromisos</h3></div>
        	<div class="w3-text-grey w3-medium">
			Swapi tu vehículo en cuota flexible para cada momento. Elige tu vehículo, el que mas se adapta a tus 
			necesidades y el tiempo que lo necesites. Es para las personas que quieren un coche sin obligaciones 
			a largo plazo o que quieran cambiar de coche según su estilo de vida. Viene con todo incluido, el 
			seguro con asistencia en carretera, los impuestos, el mantenimiento… Puedes cambiar el vehículo 
			cada mes si lo necesitas o decidir no tener coche. Pagas solo por los meses que decides tener tu 
			coche. También ofrecemos un servicio de entrega a domicilio.
			</div>
    	</div>	
	</div>
	
	
	<div class="w3-container">
		
	</div>
	
    <footer class="w3-container w3-center w3-theme-dark">
        <h6>Copyright 2019 - Swapi</h6>
    </footer>
</div>

<script>
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</body>
</html>
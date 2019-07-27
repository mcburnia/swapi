<?php //require_once 'users/init.php';?>
<?php //require_once 'users/includes/navigation.php';?>
<?php //if (!securePage($_SERVER['PHP_SELF'])){die();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swapi Dealer - Vehicles</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- our personalised css style here - either internal style tags or link to an external css sheet-->
	<link rel="stylesheet" href="css/swapi.css">
</head>
<body onLoad="" onpagehide="w3_close()">
<!-- Main application home page -->
<?php // require_once 'users/includes/navigation.php';?>

<div data-role="page" id="catalogue">
    <div class="w3-container w3-left">
		<p><img src="Images/logo_v6.png" width="125"/></p>
    </div>

    <!-- Add, Clone, Delete buttons -->
    <div class="w3-row-padding w3-container">
        <div class="w3-col s3 m2 l1"><button onclick="DealerSession.initialise()"
                class="w3-button w3-round-xxlarge"><i class='fas fa-list' style="font-size:20px;"></i></button></div>
        <div class="w3-col s3 m2 l1"><button onclick="document.getElementById('tabcreatebox').style.display='block'"
                class="w3-button w3-round-xxlarge"><i class='fas fa-folder-plus' style="font-size:20px;"></i></button></div>
		<div class="w3-col s3 m2 l1"><button onclick="Catalogue.selectCatalogue(true);"
                class="w3-button w3-round-xxlarge"><i class='far fa-clone' style="font-size:20px;"></i></button></div>
        <div class="w3-col s3 m2 l1"><button onclick="document.getElementById('tabeditbox').style.display='block'"
                class="w3-button w3-round-xxlarge"><i class='far fa-trash-alt' style="font-size:20px;"></i></button></div>
        <div class="w3-col s3 m2 l1"><a href="#profile" data-role="button" data-icon="far fa-user">user profile</a></div>
    </div>

	<!-- UserSpice Navigation -->
	    
    <!--Dealer Vehicle Catalogue Section-->
    <div class="w3-row-padding w3-container w3-white">
    	<!-- Vehicle list -->
        <div class="w3-col s12 m6 l4">
            <img id="selectedcarpicture" class="w3-image w3-border w3-padding" src="images/vehicles/dealerphoto.jpg">
            <div class="w3-card w3-padding" id="cataloguepanel">
            
            </div>
        </div>
        
        <!-- Vehicle display form -->
        <div id="vehiclepanel" class="w3-col s12 m6 l8">
            <form class="w3-container" action="phpfiles/dummy.php" method="POST"> <!-- // create_tab.php -->
                <div class="w3-section">
                	<fieldset>
                	<legend>Vehicle Details</legend>
                        <div>
                            <input id="vreg" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Registration"
                                   name="vreg"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vbrand" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Make"
                                   name="vbrand"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vmodel" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Model"
                                   name="vmodel"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vcolour" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Colour"
                                   name="vcolour"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <textarea id="vdescribe" class="w3-input w3-border" 
                            	   style="resize:none"
                                   placeholder="Description"
                                   name="vdescribe"
              					   required readonly></textarea>
                        </div>
                        <div>
                            <select id="vcategory" name="vcategory">
                                <option value="0" selected>Please select vehicle type</option>
                                <option value="1">saloon</option>
                                <option value="2">estate</option>
                                <option value="3">coupe</option>
                                <option value="4">convertable</option>
                                <option value="5">hatchback</option>
                                <option value="6">SUV</option>
                                <option value="7">MPV</option>
                            </select>
                        </div>
                        <div>
                            <select id="vfueltype" name="vfueltype">
                                <option value="0" selected>Please select fuel type</option>
                                <option value="1">Petrol</option>
                                <option value="2">Diesel</option>
                                <option value="3">Hybrid</option>
                                <option value="4">Electric</option>
                            </select>
                        </div>
                        <div>
                            <input id="venginesize" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Engine size"
                                   name="venginesize"
                                   value="" readonly>
                        </div>
                        <div>
                            <input id="vvin" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Vehicle Identification Number"
                                   name="vvin"
                                   value=""
                                   required readonly>
                        </div>
						<div>
                            <label>Photo</label>
                            <input id="vphoto" class="w3-input w3-border"
                                   type="file"
                                   placeholder="Photo"
                                   name="vphoto"
                                   value=""
                                   readonly>
                        </div>
                    </fieldset>
                    <fieldset>
    					<legend>Vehicle extras:</legend>
                        <div>
                            <input id="vextra1" class="w3-input w3-border"
                                   type="text"
                                   placeholder="First extra"
                                   name="vextra1"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vextra2" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Second extra"
                                   name="vextra2"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vextra3" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Third extra"
                                   name="vextra3"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vextra4" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Fouth extra"
                                   name="vextra4"
                                   value=""
                                   required readonly>
                        </div>
                    </fieldset>
                    <fieldset>
    					<legend>Vehicle location:</legend>
        				<div>
                            <input id="vaddress1" class="w3-input w3-border"
                                   type="text"
                                   placeholder="First line of address"
                                   name="vaddress1"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vpostcode" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Postal code"
                                   name="vpostcode"
                                   value=""
                                   required readonly>
                        </div>
                    </fieldset>
                    <div>
                        <!-- <label><b>Reference</b></label> -->
                        <input id="vid" class="w3-input w3-border"
                               type="hidden"
                               placeholder="Vehicle Reference"
                               name="vid"
                               value=""
                               required>
                    </div>
                    <button id="editbutton" class="w3-button w3-theme w3-padding" onClick=DealerSession.EditMode(true);>Edit</button>
                    <button id="savebutton" class="w3-button w3-theme w3-padding" onClick=DealerSession.EditMode(false); type="submit" style="display: none">Save</button>
                </div>
            </form>
        </div>
    </div>   
    
	<div class="w3-container">
    	<div class="w3-panel w3-left">
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
	</div>
	
	<div class="w3-container">
		<!-- Nothing doing in here -->
	</div>
	
    <footer class="w3-container w3-center w3-theme-dark">
        <h6>Copyright 2019 - Swapi</h6>
    </footer>
</div>

<div class="w3-row-padding w3-container w3-white" data-role="page" id="profile">
<div data-role="header" id="dealer">

	<!-- Add, Clone, Delete buttons -->
    <div class="w3-row-padding w3-container">
        <div class="w3-col s3 m2 l1"><button onclick="DealerSession.initialise()"
                class="w3-button w3-round-xxlarge"><i class='fas fa-list'></i></button></div>
        <div class="w3-col s3 m2 l1"><button onclick="document.getElementById('tabcreatebox').style.display='block'"
                class="w3-button w3-round-xxlarge"><i class='far fa-file'></i></button></div>
        <div class="w3-col s3 m2 l1"><button onclick="Catalogue.selectCatalogue(true);"
                class="w3-button w3-round-xxlarge"><i class='far fa-clone'></i></button></div>
        <div class="w3-col s3 m2 l1"><button onclick="document.getElementById('tabeditbox').style.display='block'"
                class="w3-button w3-round-xxlarge"><i class='far fa-trash-alt'></i></button></div>
    </div>
</div>
	<!-- Vehicle list -->
    <div class="w3-col s12 m4 l3">
        <img id="selectedcarpicture" class="w3-image w3-border w3-padding" src="images/vehicles/dealerphoto.jpg">
    </div>
    
    <!-- Dealer profile form -->
    <div id="dealerpanel" class="w3-col s12 m8 l9">
        <form id="dealerprofileform" class="w3-container" action="create_tab.php" method="POST">
            <div class="w3-section">
            	<fieldset>
            	<legend>Dealer Details</legend>
                    <div>
                        <input id="dconame" class="w3-input w3-border"
                               type="text"
                               placeholder="Company name"
                               name="dconame"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="dvisiblename" class="w3-input w3-border"
                               type="text"
                               placeholder="Visible Name"
                               name="dvisiblename"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="demail" class="w3-input w3-border"
                               type="text"
                               placeholder="Email"
                               name="demail"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="dmobile" class="w3-input w3-border"
                               type="text"
                               placeholder="Mobile number"
                               name="dmobile"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="vvatnumber" class="w3-input w3-border"
                               type="text"
                               placeholder="VAT Number"
                               name="vvatnumber"
                               value="">
                    </div>
                    <div>
                        <input id="vcoregnumber" class="w3-input w3-border"
                               type="text"
                               placeholder="Company Registration Number"
                               name="vcoregnumber"
                               value=""
                               required>
                    </div>
                </fieldset>
                <fieldset>
            	<legend>Contact Details</legend>
                    <div>
                        <input id="dprincipalname" class="w3-input w3-border"
                               type="text"
                               placeholder="Name"
                               name="dprincipalname"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="dprincipalsurname" class="w3-input w3-border"
                               type="text"
                               placeholder="Surname"
                               name="dprincipalsurname"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="dprincipalemail" class="w3-input w3-border"
                               type="text"
                               placeholder="Email"
                               name="dprincipalemail"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="dprincipalmobile" class="w3-input w3-border"
                               type="text"
                               placeholder="Mobile number"
                               name="dprincipalmobile"
                               value=""
                               required>
                    </div>
                </fieldset>
                <fieldset>
					<legend>Dealership location:</legend>
    				<div>
                        <input id="daddress1" class="w3-input w3-border"
                               type="text"
                               placeholder="First line of address"
                               name="daddress1"
                               value=""
                               required>
                    </div>
    				<div>
                        <input id="daddress2" class="w3-input w3-border"
                               type="text"
                               placeholder="Second line of address"
                               name="daddress2"
                               value=""
                               required>
                    </div>
    				<div>
                        <input id="dregion" class="w3-input w3-border"
                               type="text"
                               placeholder="Region"
                               name="dregion"
                               value=""
                               required>
                    </div>
                    <div>
                        <input id="dcountry" class="w3-input w3-border"
                               type="text"
                               placeholder="Country"
                               name="dcountry"
                               value=""
                               required>
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
                <button class="w3-button w3-theme w3-padding" type="submit">Save</button>
            </div>
        </form>
    </div>
    
	<div class="w3-container">
    	<div class="w3-panel w3-left">
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
	</div>
	
	<div class="w3-container">
		<!-- Nothing doing in here -->
	</div>
	
    <footer class="w3-container w3-center w3-theme-dark">
        <h6>Copyright 2019 - Swapi</h6>
    </footer>
</div>   

<script>

    // prototype catalogue object
    var Catalogue = {
    
        catalogue_id: 0,
        catalogue_list: [],
        product_list: [],
    
        // select the vehicle catalogue data from the database
        selectCatalogue: function(config){
            // fetch the tab record from the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(obj) {
                if (this.readyState == 4 && this.status == 200) {
    
                    // populate the table from the results of the query
                    Catalogue.catalogue_list = JSON.parse(this.responseText);
                    if(config === true){
                        Catalogue.buildCatalogueDataList();
                    } else {
                        // build the list of vehicles on the dealer home screen
                        Catalogue.buildCatalogueTable();
                    }
                }
            };
    
            xhttp.open("GET", "phpfiles/load_catalogue.php", true);
            xhttp.send();
        },
    
        // populate the form with the vehicle data
        populateVehicleForm: function(vehicleid)
        {
        	var x;
            for (x in Catalogue.catalogue_list)
            {
                // check we have the selected record from the catalogue
                if(Catalogue.catalogue_list[x].vehicleid == vehicleid)
                {
                	document.getElementById("vreg").value = Catalogue.catalogue_list[x].plate;
                	document.getElementById("vbrand").value = Catalogue.catalogue_list[x].brand;
                	document.getElementById("vmodel").value = Catalogue.catalogue_list[x].model;
                	document.getElementById("vcolour").value = Catalogue.catalogue_list[x].colour;
                	document.getElementById("vdescribe").value = Catalogue.catalogue_list[x].description;
                	document.getElementById("vcategory").value = Catalogue.catalogue_list[x].category;
                	document.getElementById("vfueltype").value = Catalogue.catalogue_list[x].fuel;
                	document.getElementById("venginesize").value = Catalogue.catalogue_list[x].cc;
                	document.getElementById("vvin").value = Catalogue.catalogue_list[x].vin;
                	document.getElementById("selectedcarpicture").src = Catalogue.catalogue_list[x].reference;
                	document.getElementById("vextra1").value = Catalogue.catalogue_list[x].ex1;
                	document.getElementById("vextra2").value = Catalogue.catalogue_list[x].ex2;
                	document.getElementById("vextra3").value = Catalogue.catalogue_list[x].ex3;
                	document.getElementById("vextra4").value = Catalogue.catalogue_list[x].ex4;
                	document.getElementById("vaddress1").value = Catalogue.catalogue_list[x].add1;
                	document.getElementById("vpostcode").value = Catalogue.catalogue_list[x].add2;
                }
            }
        },

        // removes any and all vehicles from the catalogue list
        clearCatalogueTable: function()
        {
        	// Get the <ul> element with id="myList"
        	var catalogue = document.getElementById("cataloguepanel");

        	// If the <ul> element has any child nodes, remove its first child node
        	while (catalogue.hasChildNodes()) {
        		catalogue.removeChild(catalogue.childNodes[0]);
        	}        
        },
    
        // build the vehicle catalogue table in the end panel of the app
        buildCatalogueTable: function()
        {
        	this.clearCatalogueTable();
        	
            var x;
            for (x in Catalogue.catalogue_list)
            {
                // create button
                var button = document.createElement("button");
    
                // creat text nodes
                var buttontitle = document.createTextNode(this.catalogue_list[x].plate);
    
                // add class and event
                button.classList.add('w3-block');
                
                button.addEventListener("click", Catalogue.populateVehicleForm.bind(null, Catalogue.catalogue_list[x].vehicleid, false));
    
                // build table
                var cat_panel = document.getElementById("cataloguepanel");
                // add button
                cat_panel.appendChild(button);
                // add title
                button.appendChild(buttontitle);
            }
        }
    };

    var DealerSession = {
        initialise: function(){
            Catalogue.selectCatalogue(false);
            this.EditMode(false);
        },
    
    	EditMode: function(State){
    		// tested and working AMCB
    		document.getElementById("vreg").readOnly = State ? false : true;
    		document.getElementById("vbrand").readOnly = State ? false : true;
    		document.getElementById("vmodel").readOnly = State ? false : true;
    		document.getElementById("vcolour").readOnly = State ? false : true;
    		document.getElementById("vdescribe").readOnly = State ? false : true;
    		document.getElementById("vcategory").readOnly = State ? false : true;
    		document.getElementById("vfueltype").readOnly = State ? false : true;
    		document.getElementById("venginesize").readOnly = State ? false : true;
    		document.getElementById("vvin").readOnly = State ? false : true;
    		document.getElementById("vphoto").readOnly = State ? false : true;
    		document.getElementById("vextra1").readOnly = State ? false : true;
    		document.getElementById("vextra2").readOnly = State ? false : true;
    		document.getElementById("vextra3").readOnly = State ? false : true;
    		document.getElementById("vextra4").readOnly = State ? false : true;
    		document.getElementById("vaddress1").readOnly = State ? false : true;
    		document.getElementById("vpostcode").readOnly = State ? false : true;
    
    		document.getElementById("editbutton").style.display = State ? "none" : "block";
    		document.getElementById("savebutton").style.display = State ? "block" : "none";
    	}
    };
    
</script>
</body>
</html>

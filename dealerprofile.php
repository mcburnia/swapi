<?php //require_once 'users/init.php';?>
<?php //require_once 'users/includes/navigation.php';?>
<?php //if (!securePage($_SERVER['PHP_SELF'])){die();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swapi Dealer - Profile</title>
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
<body <body onLoad="" onpagehide="w3_close()">
<!-- Main application home page -->
<?php // require_once 'users/includes/navigation.php';?>
<div data-role="page" id="Dealer">
    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
        <a href="dealer.php" class="w3-bar-item w3-button">List Vehicles</a>
        <a href="dealerprofile.php" class="w3-bar-item w3-button">Profile</a>
        <a href="#" class="w3-bar-item w3-button">Log out</a>
    </div>
  
    <div class="w3-container w3-left">
		<p><img src="Images/logo_v6.png" width="125"/></p>
    </div>
    <div class="w3-container w3-right">
        <!-- menu -->
        <button class="w3-button w3-small" onclick="w3_open()">☰</button>
    </div>

	<!-- Add, Clone, Delete buttons -->
    <div class="w3-row-padding w3-container">
        <div class="w3-col s3 m2 l1"><button onclick="document.getElementById('tabcreatebox').style.display='block'"
                class="w3-button w3-round-xxlarge"><i class='fas fa-lock'></i></button></div>
        <div class="w3-col s3 m2 l1"><button onclick="Catalogue.selectCatalogue(true);"
                class="w3-button w3-round-xxlarge"><i class='far fa-edit'></i></button></div>
        <div class="w3-col s3 m2 l1"><button onclick="document.getElementById('tabeditbox').style.display='block'"
                class="w3-button w3-round-xxlarge"><i class='far fa-save'></i></button></div>
    </div>

	<!-- UserSpice Navigation -->
	    
    <!--Dealer Vehicle Catalogue Section-->
    <div class="w3-row-padding w3-container w3-white">
    	<!-- Vehicle list -->
        <div class="w3-col s12 m4 l3">
            <img id="selectedcarpicture" class="w3-image w3-border w3-padding" src="images/vehicles/dealerphoto.jpg">
        </div>
        
        <!-- Vehicle display form -->
        <div id="vehiclepanel" class="w3-col s12 m8 l9">
            <form class="w3-container" action="create_tab.php" method="POST">
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
    </div>   
    
	<div class="w3-container">
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
    
        populateProductForm: function(selectid){
    
            var prodidx = selectid.selectedIndex - 1;
    
            document.getElementById("prodtitle").value = Catalogue.product_list[prodidx].name;
            document.getElementById("unitprice").value = Catalogue.product_list[prodidx].unitprice;
            document.getElementById("unitcost").value = Catalogue.product_list[prodidx].unitcost;
            document.getElementById("measure").value = Catalogue.product_list[prodidx].measure;
            document.getElementById("costper").value = Catalogue.product_list[prodidx].costper;
        },
    
        clearProductTable: function(product_table){
            // clear down any old table rows
            var rows = product_table.children;
            var nrows = rows.length;
            if(1 < nrows) {
                // for each row, remove all columns
                var r;
                for (r = nrows; r > 0; r--) {
                    // for each column, remove any events
                    var cols = rows[r-1].children;
                    var ncols = cols.length;
                    if(0 < ncols){
                        var c;
                        // reverse decent
                        for(c = ncols; c > 0; c--){
                            rows[r-1].deleteCell(c-1);
                        }
                    }
                }
            }
        },
    
        // display products for selected catalogue item
        selectProducts: function(catidx){
    
            // fetch the record from the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
    
                    // populate the table from the results of the query
                    Catalogue.product_list = JSON.parse(this.responseText);
                    Catalogue.displayProducts();
                }
            };
    
            xhttp.open("GET", "load_products.php?catid=" + catidx, true);
            xhttp.send();
        },
    
        // display the selected products
        displayProducts: function(){
    
            var product_table = document.getElementById("prodtable");
    
            Catalogue.clearProductTable(product_table);
    
            var columns = 0;
            var x;
            for (x in Catalogue.product_list)
            {
                columns++;
                // create button
                var button = document.createElement("button");
    
                // creat text nodes
                var product_label = Catalogue.product_list[x].name + " (€" + Catalogue.product_list[x].unitprice + ")";
                var buttontitle = document.createTextNode(product_label);
    
                var prodidx = Catalogue.product_list[x].productidx;
    
                // add class and event
                button.classList.add('w3-button');
                button.classList.add('w3-xlarge');
                button.addEventListener("click", TabOrder.addOrderItem.bind(null, prodidx, false));
    
                // only create new row every fifth column
                var rowCollection = product_table.getElementsByTagName("tr");
                var row;
                var mod = columns % 2;
    
                if(1 == mod){
                    row = document.createElement("tr");
                    row.classList.add('w3-padding-16');
                    // add row
                    product_table.appendChild(row);
                } else {
                    row = rowCollection[rowCollection.length - 1];
                }
    
                var col = document.createElement("td");
                // add cols
                row.appendChild(col);
                col.classList.add('w3-padding');
    
                // add button
                col.appendChild(button);
                // add title
                button.appendChild(buttontitle);
            }
    
            // display the dialog to the user
            document.getElementById('productselectbox').style.display='block';
        },
        
        // display the selected products
        displayVehicle: function(){
    
            var product_table = document.getElementById("prodtable");
    
            Catalogue.clearProductTable(product_table);
    
            var columns = 0;
            var x;
            for (x in Catalogue.product_list)
            {
                columns++;
                // create button
                var button = document.createElement("button");
    
                // creat text nodes
                var product_label = Catalogue.product_list[x].name + " (€" + Catalogue.product_list[x].unitprice + ")";
                var buttontitle = document.createTextNode(product_label);
    
                var prodidx = Catalogue.product_list[x].productidx;
    
                // add class and event
                button.classList.add('w3-button');
                button.classList.add('w3-xlarge');
                button.addEventListener("click", TabOrder.addOrderItem.bind(null, prodidx, false));
    
                // only create new row every fifth column
                var rowCollection = product_table.getElementsByTagName("tr");
                var row;
                var mod = columns % 2;
    
                if(1 == mod){
                    row = document.createElement("tr");
                    row.classList.add('w3-padding-16');
                    // add row
                    product_table.appendChild(row);
                } else {
                    row = rowCollection[rowCollection.length - 1];
                }
    
                var col = document.createElement("td");
                // add cols
                row.appendChild(col);
                col.classList.add('w3-padding');
    
                // add button
                col.appendChild(button);
                // add title
                button.appendChild(buttontitle);
            }
    
            // display the dialog to the user
            document.getElementById('productselectbox').style.display='block';
        },
    
        // select the catalogue data from the database
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
    
        // build products dropdown data list
        populateProducts: function(catalogue_select, products_select){
    
            // fetch the record from the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
    
                    // populate the table from the results of the query
                    Catalogue.product_list = JSON.parse(this.responseText);
    
                    // clear the old options
                    while(products_select.length > 1){products_select.remove(0);}
    
                    var x;
                    for (x in Catalogue.product_list)
                    {
                        // create option
                        var option = document.createElement("option");
                        // set the value
                        option.text = Catalogue.product_list[x].name;
                        option.value = Catalogue.product_list[x].catidx;
                        // add option
                        products_select.add(option);
                    }
                }
            };
    
            xhttp.open("GET", "load_products.php?catid=" + catalogue_select.value, true);
            xhttp.send();
        },

        populateVehicleForm: function(vehicleid){
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
                	document.getElementById("vpostcode").value = Catalogue.catalogue_list[x].add2;
                }
            }
        },
    
        // build catalogue dropdown data list
        buildCatalogueDataList: function(){
    
            // build table
            var datalist = document.getElementById("cataloguesdl");
            // clear the old options
            while(datalist.length > 1){datalist.remove(0);}
    
            var x;
            for (x in Catalogue.catalogue_list)
            {
                // create option
                var option = document.createElement("option");
                // set the value
                option.text = Catalogue.catalogue_list[x].name;
                option.value = Catalogue.catalogue_list[x].catidx;
                // add option
                datalist.add(option);
            }
    
            // display the dialog to the user
            document.getElementById('stockconfigbox').style.display = 'block';
        },
    
        // build the catalogue table in the end panel of the app
        buildCatalogueTable: function(){
    
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
            // Catalogue.selectCatalogue(false);
        }
    };
    
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</body>
</html>

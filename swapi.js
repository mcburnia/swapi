/**
 * 
 */
"use strict"

	const li_icon_checkbox = "<span class='fa-li'><i class='fas fa-check'></i></span>";
	const li_icon_affiliate = "<span class='fa-li'><i class='fab fa-affiliatetheme'></i></span>";
	const ul_bookinghistory_css_class = "fa-ul w3-xlarge";
	const ul_bookinghistory_css_class_mobile = "fa-ul w3-tiny w3-hide-medium w3-hide-large";

	// Language object
	// the language object is initialised by the cusomer or dealer object
	// to fetch all displayed page text in the chosen language of the current user
	// according to thier languages preferences in their profile
	var Language = {
		
		selected_language: "en",
		placeholders: [],
		
		// all langage settings are held in a single language specific record within the database
		// and are accessible a 
		loadLang: function(lang = "en"){
			if(0 != lang.length){
				selected_language = lang;
			}
            // fetch the language record from the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // populate the table from the results of the query
                	Language.placeholders = JSON.parse(this.responseText);
                }
            };
    
            xhttp.open("GET", "load_bookings.php?lang=" + selected_language, true);
            xhttp.send();
		},
		
		// get and set finctions for all placeholders to manage formatting and 
		// concatination where needed
		getPlaceholder: function(){
			
		}
	};

    // bookings object
    var Bookings = {
    
        booking_id: 0,
        selected_vehicle_id: 0,
        booking_list: [],
        booking_data_list: [],
        product_list: [],
        testvar: "",
    
        // select the booking history data from the database
        loadBookingHistory: function(){
            // fetch the tab record from the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // populate the table from the results of the query
                	Bookings.booking_list = JSON.parse(this.responseText);
                }
            };
    
            // This needs updating to include the uid of the customer
            xhttp.open("GET", "load_bookings.php", true);
            xhttp.send();
        },
    
        // populate the form with the booking data
        // first load the data on the chosen car for the booking
        // then load the customer data into booking form
        pre_populateBookingForm: function(vehicleid)
        {
        	// start by clearing the form down of any previous data
        	Bookings.clearBookingForm();
        	
            this.selected_vehicle_id = vehicleid;
        	var x;
            for (x in Catalogue.catalogue_list)
            {
                // check we have the selected record from the catalogue
                if(Catalogue.catalogue_list[x].vehicleid == vehicleid)
                {
                	document.getElementById("").value = Catalogue.catalogue_list[x].plate;
                	document.getElementById("").value = Catalogue.catalogue_list[x].brand;
                	document.getElementById("").value = Catalogue.catalogue_list[x].model;
                	document.getElementById("").value = Catalogue.catalogue_list[x].colour;
                	document.getElementById("").value = Catalogue.catalogue_list[x].description;
                	document.getElementById("").value = Catalogue.catalogue_list[x].category;
                	document.getElementById("").value = Catalogue.catalogue_list[x].fuel;
                	document.getElementById("").value = Catalogue.catalogue_list[x].cc;
                	document.getElementById("").value = Catalogue.catalogue_list[x].vin;
                	document.getElementById("").src = Catalogue.catalogue_list[x].reference;
                	document.getElementById("").value = Catalogue.catalogue_list[x].ex1;
                	document.getElementById("").value = Catalogue.catalogue_list[x].ex2;
                	document.getElementById("").value = Catalogue.catalogue_list[x].ex3;
                	document.getElementById("").value = Catalogue.catalogue_list[x].ex4;
                	document.getElementById("").value = Catalogue.catalogue_list[x].add1;
                	document.getElementById("").value = Catalogue.catalogue_list[x].add2;
                }
            }
        },

        // select the booking history data from the database
        loadBookingData: function(){
            // fetch the tab record from the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // populate the table from the results of the query
                	Bookings.booking_data_list = JSON.parse(this.responseText);
                	Bookings.getBookingData();
                }
            };
    
            // This needs updating to include the uid of the customer
            Bookings.booking_id = document.getElementById("bookinghistory").value;
            xhttp.open("GET", "get_booking.php?bookingid=" + Bookings.booking_id, true);
            xhttp.send();
        },
    
        // get the booking data from the db to populate the booking history
        // section of the customer dashboard page with the selected booking.
        getBookingData: function()
        {
        	Bookings.booking_id = document.getElementById("bookinghistory").value;
        	var x;
            for (x in Bookings.booking_data_list)
            {
                // check we have the selected record from the catalogue
                if(Bookings.booking_data_list[x].bookingid == Bookings.booking_id)
                {
                	document.getElementById("startdate").innerHTML = Bookings.booking_data_list[x].sdate;
                	document.getElementById("duration").innerHTML = Bookings.booking_data_list[x].duration;
                	document.getElementById("brand").innerHTML = Bookings.booking_data_list[x].brand;
                	document.getElementById("model").innerHTML = Bookings.booking_data_list[x].model;
                	document.getElementById("final_distance").innerHTML = Bookings.booking_data_list[x].final_distance;
                	document.getElementById("final_rental_price").innerHTML = Bookings.booking_data_list[x].final_rental_price;
                	document.getElementById("allrisks").innerHTML = Bookings.booking_data_list[x].allrisks;
                	document.getElementById("priceagreed").innerHTML = Bookings.booking_data_list[x].priceagreed;
                	document.getElementById("delivery").innerHTML = Bookings.booking_data_list[x].delivery;
                	document.getElementById("drivername").innerHTML = Bookings.booking_data_list[x].drivername;
                	document.getElementById("driversurname").innerHTML = Bookings.booking_data_list[x].driversurname;
                	document.getElementById("address1").innerHTML = Bookings.booking_data_list[x].address1;
                	document.getElementById("address2").innerHTML = Bookings.booking_data_list[x].address22;
                }
            }
        },
        
        myFunction: function() 
        {
        	var x = document.getElementById("bookinghistory").value;
        	document.getElementById("demo").innerHTML = "You selected: " + x;
        },

        // clear the booking form
        clearBookingForm: function()
        {
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("selectedcarpicture").src = "images/carsilhouette.jpg";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
           	document.getElementById("").value = "";
        },

        // removes any and all vehicles from the catalogue list
        clearBookingHistory: function()
        {
        	// Get the select element
        	var bookings = document.getElementById("bookinghistory");

        	// If the <select> element has any child nodes, remove its first child node
        	while (bookings.hasChildNodes()) {
        		bookings.removeChild(bookings.childNodes[0]);
        	}        
        },
    
        // build the vehicle catalogue table in the end panel of the app
        buildBookingHistory: function()
        {
        	Bookings.clearBookingHistory();
        	// build options
            let bookings = document.getElementById("bookinghistory");
            
			let x;
            for (x in Bookings.booking_list)
            {
                // create button
                var option = new Option(
                		Bookings.booking_list[x].sdate + " " + 
                		Bookings.booking_list[x].brand + " " + 
                		Bookings.booking_list[x].model, 
                		Bookings.booking_list[x].bookingid);
    
                // add option
                bookings.appendChild(option);
            }
        }
    };

    var CustomerSession = {
    	// UserSpice user id
    	uid: 0,
    	
        initialise: function(){
            Bookings.loadBookingHistory(false);
            // CustomerSession.EditMode(false);
        },

        AddVehicle: function(){
        	// set the form action to add vehicle
			document.getElementById("vehicleform").action = "/add_vehicle.php";
			// disable all the other buttons to avoid error
			document.getElementById("refreshvehiclelistbutton").disabled = true;
			document.getElementById("addvehiclebutton").disabled = true;
			document.getElementById("clonevehiclebutton").disabled = true;
			document.getElementById("deletevehiclebutton").disabled = true;
			// clear the form
			Catalogue.clearCatalogueTable();
			Catalogue.clearVehicleForm();
			// place into edit mode
			this.EditMode(true);
        },
    
        EditVehicle: function(){
            this.EditMode(true);
			document.getElementById("vehicleform").action = "/edit_vehicle.php";
        },
    
        CloneVehicle: function(){
        	this.EditMode(true);
			document.getElementById("vehicleform").action = "/edit_vehicle.php";
        },
    
        DeleteVehicle: function(){
        	// model dialog box to confirm delete with dealer
            //
            
			// delete current vehicle if dealer confirmation
			var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
        			// execute vehicle list refresh
        			initialise();
                }
            };

            var commandstr = "delete_vehicle.php?vin=" + Catalogue.selected_vehicle_id;
            //alert(commandstr);
            //xhttp.open("GET", commandstr, true);
            //xhttp.send();
			

        },
    
    	EditMode: function(State){
    		// tested and working AMCB
/*    		document.getElementById("vreg").readOnly = !State;
    		document.getElementById("vbrand").readOnly = !State;
    		document.getElementById("vmodel").readOnly = !State;
    		document.getElementById("vcolour").readOnly = !State;
    		document.getElementById("vdescribe").readOnly = !State;
    		document.getElementById("vcategory").readOnly = !State;
    		document.getElementById("vfueltype").readOnly = !State;
    		document.getElementById("venginesize").readOnly = !State;
    		document.getElementById("vvin").readOnly = !State;
    		document.getElementById("vphoto").readOnly = !State;
    		document.getElementById("vextra1").readOnly = !State;
    		document.getElementById("vextra2").readOnly = !State;
    		document.getElementById("vextra3").readOnly = !State;
    		document.getElementById("vextra4").readOnly = !State;
    		document.getElementById("vaddress1").readOnly = !State;
    		document.getElementById("vpostcode").readOnly = !State;

    		document.getElementById("dealerid").readOnly = !State;
    		document.getElementById("vehicleid").readOnly = !State;
    
    		document.getElementById("ceditbutton").style.display = State ? "none" : "block";
    		document.getElementById("csavebutton").style.display = State ? "block" : "none";
    		document.getElementById("cancelbutton").style.display = State ? "block" : "none";

			document.getElementById("refreshvehiclelistbutton").disabled = State;
			document.getElementById("addvehiclebutton").disabled = State;
			document.getElementById("clonevehiclebutton").disabled = State;
			document.getElementById("deletevehiclebutton").disabled = State;
*/        },
    	
    	switchTab: function(evt, tabName) {
            
            var i, x, tablinks;

            x = document.getElementsByClassName("tab");

            for (i = 0; i < x.length; i++) {
            	x[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablink");

            for (i = 0; i < x.length; i++) {
            	tablinks[i].className = tablinks[i].className.replace(" w3-theme", "");
            }

            document.getElementById(tabName).style.display = "block";
            
            evt.currentTarget.className += " w3-theme";
            
            if("history" === tabName){
            	Bookings.buildBookingHistory();
            }
        },

		Accordion: function(id) {
			var isVisible = document.getElementById(id).style.display == "block";
			if (isVisible) {
				document.getElementById(id).style.display = "none";
			} else { 
				document.getElementById(id).style.display = "block";
			}
		},
		
		WizardAccordion: function(id, idb, idc) {
			var isVisible = document.getElementById(id).style.display == "block";
			if (isVisible) {
				document.getElementById(id).style.display = "none";
			} else { 
				document.getElementById(id).style.display = "block";
				document.getElementById(idb).style.display = "none";
				document.getElementById(idc).style.display = "none";
			}
		}    
    };


/**
 * 
 */
    // prototype catalogue object
    var Catalogue = {
    
        catalogue_id: 0,
        selected_vehicle_id: 0,
        catalogue_list: [],
        product_list: [],
    
        // select the vehicle catalogue data from the database
        selectCatalogue: function(config){
            // fetch the tab record from the database
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(obj) {
                if(obj){}
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
    
            xhttp.open("GET", "load_catalogue.php", true);
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
                	Catalogue.selected_vehicle_id = vehicleid;
                	document.getElementById("vreg").value = Catalogue.catalogue_list[x].plate;
                	document.getElementById("vbrand").value = Catalogue.catalogue_list[x].brand;
                	document.getElementById("vmodel").value = Catalogue.catalogue_list[x].model;
                	document.getElementById("vcolour").value = Catalogue.catalogue_list[x].colour;
                	//document.getElementById("vdescribe").value = Catalogue.catalogue_list[x].description;
                	document.getElementById("vcategory").value = Catalogue.catalogue_list[x].category;
                	document.getElementById("vfueltype").value = Catalogue.catalogue_list[x].fuel;
                	document.getElementById("venginepower").value = Catalogue.catalogue_list[x].cc;
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

        // clear the vehicle form
        clearVehicleForm: function()
        {
           	document.getElementById("vreg").value = "";
           	document.getElementById("vbrand").value = "";
           	document.getElementById("vmodel").value = "";
           	document.getElementById("vcolour").value = "";
           	document.getElementById("vdescribe").value = "";
           	document.getElementById("vcategory").value = "";
           	document.getElementById("vfueltype").value = "";
           	document.getElementById("venginesize").value = "";
           	document.getElementById("vvin").value = "";
           	document.getElementById("selectedcarpicture").src = "images/carsilhouette.jpg";
           	document.getElementById("vextra1").value = "";
           	document.getElementById("vextra2").value = "";
           	document.getElementById("vextra3").value = "";
           	document.getElementById("vextra4").value = "";
           	document.getElementById("vaddress1").value = "";
           	document.getElementById("vpostcode").value = "";
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

        AddVehicle: function(){
        	// set the form action to add vehicle
			document.getElementById("vehicleform").action = "/add_vehicle.php";
			// disable all the other buttons to avoid error
			document.getElementById("refreshvehiclelistbutton").disabled = true;
			document.getElementById("addvehiclebutton").disabled = true;
			document.getElementById("clonevehiclebutton").disabled = true;
			document.getElementById("deletevehiclebutton").disabled = true;
			// clear the form
			Catalogue.clearCatalogueTable();
			Catalogue.clearVehicleForm();
			// place into edit mode
			this.EditMode(true);
        },
    
        EditVehicle: function(){
            this.EditMode(true);
			document.getElementById("vehicleform").action = "/edit_vehicle.php";
        },
    
        CloneVehicle: function(){
        	this.EditMode(true);
			document.getElementById("vehicleform").action = "/edit_vehicle.php";
        },
    
        DeleteVehicle: function(){
        	// model dialog box to confirm delete with dealer
            //
            
			// delete current vehicle if dealer confirmation
			var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
        			// execute vehicle list refresh
        			initialise();
                }
            };

            var commandstr = "delete_vehicle.php?vin=" + Catalogue.selected_vehicle_id;
            //alert(commandstr);
            //xhttp.open("GET", commandstr, true);
            //xhttp.send();
			

        },
    
    	EditMode: function(State){
    		// tested and working AMCB
    		document.getElementById("vreg").readOnly = !State;
    		document.getElementById("vbrand").readOnly = !State;
    		document.getElementById("vmodel").readOnly = !State;
    		document.getElementById("vcolour").readOnly = !State;
    		document.getElementById("vdoors").readOnly = !State;
    		document.getElementById("vcategory").readOnly = !State;
    		document.getElementById("vfueltype").readOnly = !State;
    		document.getElementById("venginepower").readOnly = !State;
    		document.getElementById("vvin").readOnly = !State;
    		document.getElementById("vphoto").readOnly = !State;
    		document.getElementById("vextra1").readOnly = !State;
    		document.getElementById("vextra2").readOnly = !State;
    		document.getElementById("vextra3").readOnly = !State;
    		document.getElementById("vextra4").readOnly = !State;
    		document.getElementById("vaddress1").readOnly = !State;
    		document.getElementById("vpostcode").readOnly = !State;

    		document.getElementById("dealerid").readOnly = !State;
    		document.getElementById("vehicleid").readOnly = !State;
    
    		document.getElementById("ceditbutton").style.display = State ? "none" : "block";
    		document.getElementById("csavebutton").style.display = State ? "block" : "none";
    		document.getElementById("cancelbutton").style.display = State ? "block" : "none";

			document.getElementById("refreshvehiclelistbutton").disabled = State;
			document.getElementById("addvehiclebutton").disabled = State;
			document.getElementById("clonevehiclebutton").disabled = State;
			document.getElementById("deletevehiclebutton").disabled = State;
        },
    	
    	switchTab: function(evt, tabName) {
            
            var i, x, tablinks;

            x = document.getElementsByClassName("tab");

            for (i = 0; i < x.length; i++) {
            	x[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablink");

            for (i = 0; i < x.length; i++) {
            	tablinks[i].className = tablinks[i].className.replace(" w3-theme", "");
            }

            document.getElementById(tabName).style.display = "block";
            
            evt.currentTarget.className += " w3-theme";
        },
        
		WizardAccordion: function(id, idb, idc, idd) {
			var isVisible = document.getElementById(id).style.display == "block";
			if (isVisible) {
				document.getElementById(id).style.display = "none";
			} else { 
				document.getElementById(id).style.display = "block";
				document.getElementById(idb).style.display = "none";
				document.getElementById(idc).style.display = "none";
				document.getElementById(idd).style.display = "none";
			}
		}    
    };

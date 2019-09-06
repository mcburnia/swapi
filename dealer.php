<?php //require_once 'users/init.php';?>
<?php //require_once 'users/includes/navigation.php';?>
<?php //if (!securePage($_SERVER['PHP_SELF'])){die();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Swapi Dealer - Vehicles</title>
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

<body onLoad="DealerSession.initialise();">
<!-- Main application home page -->
<header>
    <div class="w3-container w3-left">
    	<p><a href="swapi.php"><img src="Images/logo_v6.png" width="125"/></a></p>
    </div>
    <div class="w3-bar">
        <button class="w3-bar-item w3-button tablink w3-theme" onclick="DealerSession.switchTab(event,'catalogue');">Vehicle Catalogue</button>
        <button class="w3-bar-item w3-button tablink" onclick="DealerSession.switchTab(event,'profile');">Dealer Profile</button>
    </div>
</header>

<div id="confirmdelete" class="modal">
	<div class="w3-container">
		
	</div>
</div>
  
<div id="catalogue" class="w3-container tab">
	<div class="w3-panel w3-row">
		<!-- column 1 -->
	    <div class="w3-container w3-col s12 m6 l5 w3-small">
	
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-center w3-white w3-row">
				<h1 class="w3-center w3-text-theme" style="font-weight: 900;">Vehicle Catalogue</h1>
				<img id="selectedcarpicture" class="w3-image w3-padding" style="width:90%" src="images/vehicles/dealerphoto.png">
				<p class="w3-panel">
				</p>
			</div>
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-center w3-white w3-row">
			    <!-- Add, Clone, Delete buttons  s3 m2 l1-->
			    <div class="w3-bar">
			        <!-- <div class="w3-bar-item"><button id="refreshvehiclelistbutton" onclick="DealerSession.initialise();"
			                class="w3-button w3-round-xxlarge" style="display:none"><i class='fas fa-sync' style="font-size:20px;"></i></button></div> -->
			        <div class="w3-bar-item"><button id="addvehiclebutton" onclick="DealerSession.AddVehicle();"
			                class="w3-button w3-round-xxlarge"><i class='fas fa-folder-plus' style="font-size:20px;"></i></button></div>
					<div class="w3-bar-item"><button id="clonevehiclebutton" onclick="DealerSession.CloneVehicle();"
			                class="w3-button w3-round-xxlarge"><i class='far fa-clone' style="font-size:20px;"></i></button></div>
			        <div class="w3-bar-item"><button id="deletevehiclebutton" onclick="DealerSession.DeleteVehicle();"
			                class="w3-button w3-round-xxlarge"><i class='far fa-trash-alt' style="font-size:20px;"></i></button></div>
			        <div class="w3-bar-item"><button id="editvehiclebutton" onclick="DealerSession.EditVehicle();"
			                class="w3-button w3-round-xxlarge"><i class='fas fa-edit' style="font-size:20px;"></i></button></div>
			        <!--  <div class="w3-bar-item"><button id="savevehiclebutton" onclick="DealerSession.SaveVehicle();"
			                class="w3-button w3-round-xxlarge" style="display:none"><i class='fas fa-save' style="font-size:20px;"></i></button></div> -->
			    </div>
			</div>
			<div class="w3-card w3-padding" style="display:none">
            	<button id="cancelbutton" onclick="DealerSession.initialise();" class="w3-button w3-round-xxlarge">Cancel</button>
            </div>
            <div id="cataloguepanel" class="w3-card w3-margin-bottom w3-round-xlarge w3-light-grey w3-row"></div>
			<p></p>
		</div>
		
		<!-- Vehicle display form -->
        <div id="vehiclepanel" class="w3-container w3-col s12 m6 l7">
        	<div class="w3-card w3-margin-bottom w3-round-xlarge w3-padding w3-theme-l4">
            <form id="vehicleform" class="w3-container" action="add_vehicle.php" method="POST" enctype="multipart/form-data">
            <div class="w3-section">
               	<div id="vdetails">
					<div class="w3-bar w3-margin-bottom w3-theme-dark w3-round-xlarge">
						<a href="#" onclick="DealerSession.WizardAccordion('vextras', 'vdetails', 'locandavailability', 'vcharges');" class="w3-bar-item w3-button w3-right" style="color:white;">Next...</a>
					</div>
                    <div>
                        <!-- <label><b>Reference</b></label> -->
                        <input id="vehicleid" class="w3-input w3-border"
                               type="hidden"
                               placeholder="Vehicle Reference"
                               name="vehicleid"
                               value=""
                               required>
                    </div>
                    <div>
                        <!-- <label><b>Reference</b></label> -->
                        <input id="dealerid" class="w3-input w3-border"
                               type="hidden"
                               placeholder="Dealer Reference"
                               name="dealerid"
                               value=""
                               required>
                    </div>
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
                            <input id="vcategory" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Category [saloon, coupe...]"
                                   name="vcategory"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <input id="vfueltype" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Fuel Type [diesel, petrol, hybrid...]"
                                   name="vfueltype"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <label>Power</label>
                            <input id="venginepower" class="w3-input w3-border"
                                   type="number"
                                   step="1.0"
                                   name="venginepower"
                                   value="2.0" readonly>
                        </div>
                        <div>
                            <input id="vtransmission" class="w3-input w3-border"
                                   type="text"
                                   placeholder="Transmission type [manual, automatic...]"
                                   name="vtransmission"
                                   value="" readonly>
                        </div>
                        <div>
                            <label>Doors</label>
                            <input id="vdoors" class="w3-input w3-border"
                                   type="number"
                                   step="1"
                                   name="vdoors"
                                   value="2" readonly>
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
                </div>
                <div id="vextras" style="display: none">
					<div class="w3-bar w3-margin-bottom w3-theme-dark w3-round-xlarge">
						<a href="#" onclick="DealerSession.WizardAccordion('vdetails', 'vextras', 'locandavailability', 'vcharges');" class="w3-bar-item w3-button" style="color:white;">Back</a>
						<a href="#" onclick="DealerSession.WizardAccordion('vcharges', 'locandavailability', 'vextras', 'vdetails');" class="w3-bar-item w3-button w3-right" style="color:white;">Next...</a>
					</div>
                    <fieldset>
    					<legend class="w3-margin-bottom">Vehicle availability:</legend>
                        <div>
                        	<label>from:</label>
                            <input id="availfrom" class="w3-input w3-border"
                                   type="date"
                                   placeholder=""
                                   name="availfrom"
                                   value=""
                                   required readonly>
                        </div>
                        <div>
                            <label>to:</label>
                            <input id="availto" class="w3-input w3-border"
                                   type="date"
                                   placeholder=""
                                   name="availto"
                                   value=""
                                   required readonly>
                        </div>
                    </fieldset>
                    <fieldset>
    					<legend>Vehicle extras:</legend>
                        <div>
                            <input id="vextra0" class="w3-input w3-border"
                                   type="text"
                                   placeholder="1: "
                                   name="vextra0"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra1" class="w3-input w3-border"
                                   type="text"
                                   placeholder="2: "
                                   name="vextra1"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra2" class="w3-input w3-border"
                                   type="text"
                                   placeholder="3: "
                                   name="vextra2"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra3" class="w3-input w3-border"
                                   type="text"
                                   placeholder="4: "
                                   name="vextra3"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra4" class="w3-input w3-border"
                                   type="text"
                                   placeholder="5: "
                                   name="vextra4"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra5" class="w3-input w3-border"
                                   type="text"
                                   placeholder="6: "
                                   name="vextra5"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra6" class="w3-input w3-border"
                                   type="text"
                                   placeholder="7: "
                                   name="vextra6"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra7" class="w3-input w3-border"
                                   type="text"
                                   placeholder="8: "
                                   name="vextra7"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra8" class="w3-input w3-border"
                                   type="text"
                                   placeholder="9: "
                                   name="vextra8"
                                   value=""
                                   readonly>
                        </div>
                        <div>
                            <input id="vextra9" class="w3-input w3-border"
                                   type="text"
                                   placeholder="10: "
                                   name="vextra9"
                                   value=""
                                   readonly>
                        </div>
                    </fieldset>
                </div>
                <div id="vcharges" style="display: none">
					<div class="w3-bar w3-margin-bottom w3-theme-dark w3-round-xlarge">
						<a href="#" onclick="DealerSession.WizardAccordion('vextras', 'vdetails', 'locandavailability', 'vcharges');" class="w3-bar-item w3-button" style="color:white;">Back</a>
						<a href="#" onclick="DealerSession.WizardAccordion('locandavailability', 'vextras', 'vdetails', 'vcharges');" class="w3-bar-item w3-button w3-right" style="color:white;">Next...</a>
					</div>
                    <fieldset class="w3-margin-bottom">
    				<legend class="w3-margin-bottom">Vehicle charges</legend>
                        <div>
                        	<label>1 Month:</label>
                            <input id="pricemonth1" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth1"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>2 Months:</label>
                            <input id="pricemonth2" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth2"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>3 Months:</label>
                            <input id="pricemonth3" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth3"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>6 Months:</label>
                            <input id="pricemonth6" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth6"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>12 Months:</label>
                            <input id="pricemonth12" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth12"
                                   value=0.00
                                   readonly>
                        </div>
                    </fieldset>
                    <fieldset>
    				<legend class="w3-margin-bottom">Kilometrage charges</legend>
                        <div>
                        	<label>1500 Kilometers per month:</label>
                            <input id="price1500km" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="price1500km"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>500 Kilometers extra per month:</label>
                            <input id="price500kmplus" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="price500kmplus"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>1000 Kilometers extra per month:</label>
                            <input id="price1000kmplus" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="price1000kmplus"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>1500 Kilometers extra per month:</label>
                            <input id="price1500kmplus" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="price1500kmplus"
                                   value=0.00
                                   readonly>
                        </div>
                    </fieldset>
                </div>
                <div id="locandavailability" style="display: none">
					<div class="w3-bar w3-margin-bottom w3-theme-dark w3-round-xlarge">
						<a href="#" onclick="DealerSession.WizardAccordion('vcharges', 'vextras', 'vdetails', 'locandavailability');" class="w3-bar-item w3-button" style="color:white;">Back</a>
					</div>
                    <fieldset>
    				<legend class="w3-margin-bottom">Insurance charges</legend>
                        <div>
                        	<label>1 Month CDW:</label>
                            <input id="pricemonth1cdw" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth1cdw"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>2 Months CDW:</label>
                            <input id="pricemonth2cdw" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth2cdw"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>3 Months CDW:</label>
                            <input id="pricemonth3cdw" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth3cdw"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>6 Months CDW:</label>
                            <input id="pricemonth6cdw" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth6cdw"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>12 Months CDW:</label>
                            <input id="pricemonth12cdw" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="pricemonth12cdw"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>Excess:</label>
                            <input id="priceexcess" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="priceexcess"
                                   value=0.00
                                   readonly>
                        </div>
                        <div>
                        	<label>Additional Driver:</label>
                            <input id="priceadddriver" class="w3-input w3-border"
                                   type="number"
                                   step="0.50"
                                   name="priceadddriver"
                                   value=0.00
                                   readonly>
                        </div>
                    </fieldset>
                </div>
                <div class="w3-bar"></div>
	                <button id="ceditbutton" class="catalogue w3-bar-item w3-button w3-round-xlarge w3-theme w3-padding" onClick=DealerSession.EditMode(true);>Edit</button>
	                <button id="csavebutton" class="catalogue w3-bar-item w3-button w3-round-xlarge w3-theme w3-padding" onClick=DealerSession.EditMode(false); type="submit">Save</button>
                </div>
            </form>
        	</div>
    	</div>   
	</div>
</div>

<div id="profile" class="w3-container tab" style="display:none">
    <div class="w3-panel w3-row">
		<!-- column 1 -->
	    <div class="w3-container w3-col s12 m6 l5 w3-small">
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-center w3-white w3-row">
				<h1 class="w3-center w3-text-theme" style="font-weight: 900;">Dealer Profile</h1>
				<img id="selectedcarpicture" class="w3-image w3-padding" style="width:90%" src="images/vehicles/dealerphoto.png">
				<p class="w3-panel"></p>
    		</div>
			<div class="w3-card w3-margin-bottom w3-round-xlarge w3-center w3-white w3-row">
			    <!-- Add, Clone, Delete buttons  s3 m2 l1-->
			    <div class="w3-bar">
		            <div class="w3-bar-item"><button onclick="DealerSession.initialise()"
		                    class="w3-button w3-round-xxlarge"><i class='fas fa-list'></i></button></div>
		            <div class="w3-bar-item"><button onclick="document.getElementById('tabcreatebox').style.display='block'"
		                    class="w3-button w3-round-xxlarge"><i class='far fa-file'></i></button></div>
		            <div class="w3-bar-item"><button onclick="Catalogue.selectCatalogue(true);"
		                    class="w3-button w3-round-xxlarge"><i class='far fa-clone'></i></button></div>
		            <div class="w3-bar-item"><button onclick="document.getElementById('tabeditbox').style.display='block'"
		                    class="w3-button w3-round-xxlarge"><i class='far fa-trash-alt'></i></button></div>
			    </div>
			</div>
    	</div>

	    <!-- Dealer profile form -->
	    <div id="dealerpanel" class="w3-container w3-col s12 m6 l7">
	        <div class="w3-card w3-margin-bottom w3-round-xlarge w3-padding w3-theme-l4">
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
	                <button id="editbutton" class="profile w3-button w3-theme w3-padding" onClick="DealerSession.EditMode('profile', true);">Edit</button>
	                <button id="savebutton" class="profile w3-button w3-theme w3-padding" onClick="DealerSession.EditMode('profile', false);"; type="submit" style="display: none">Save</button>
	        	</div>
	        	</form>
	        </div>	    
	    </div>
    </div>
</div>     
    
<footer class="w3-container w3-center">
	<div class="w3-container">
    	<div class="w3-panel w3-white">
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

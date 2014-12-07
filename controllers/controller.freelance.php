<?php 
	$_CONTROLLER = array(); 
	/*******************************Required*******************************/
	$_CONTROLLER["title"]  					= "Josh Rogan | Web Developer Freelance"; 
	$_CONTROLLER["header_file"]  			= true;  				//True uses default header
	$_CONTROLLER["footer_file"]				= true; 				//True uses default footer
	/*******************************Required*******************************/
 
	$_CONTROLLER["description"]				= "Josh Rogan's contact page and description for freelance of building websites, websolutions, or redesigns.";

	$_CONTROLLER["stylesheets"] 			= array("stylesheet");
	$_CONTROLLER["javascript"] 				= array("index", "scrollReveal/scrollReveal");
	


	/************DATA HANDLING FUNCTIONS *************/
	$_PAGE = array(); //This is where all of the data for the page will be 

	//Deal with freelace form 
	if(isset($_GET['ajax'])){
		$_CONTROLLER['ajax'] = true; 
		if($_GET['ajax'] == "send"){
			
			$name = isset($_POST['name'])? trim($_POST['name']) : "NAME";
			$email = isset($_POST['email'])? trim($_POST['email']) : "EMAIL";
			$numPages = isset($_POST['numberPages'])? trim($_POST['numberPages']) : "numberPages";
			$idea = isset($_POST['idea'])? trim($_POST['idea']) : "IDEA";
			$elabIdea = isset($_POST['elabIdea'])? trim($_POST['elabIdea']) : "Elaborated Idea";


			$message = "Name:\t\t\t\t" . $name . "\nEmail:\t\t\t\t" . $email . "\nNumber of Pages:\t" . $numPages . "\nIdea:\t\t\t\t" . $idea . "\nElaborated:\t\t\t" . $elabIdea . "\n";

			echo $message; 
			if(mail("jjjr1122@gmail.com", "Freelance Quote Question", $message . "\n Return Email: $email", "From: joshuarogan.com")) $send = "true";
			else $send = "false";

			echo "Message Send: $send";

			//Write to the log file
			$log = "\n---------------------Log file for joshuarogan.com-------------------\n"; 
			$log .= "Created on: \t\t" . date("r") . "\n"; 
			$log .= "IP Address:\t\t\t" . $_SERVER['REMOTE_ADDR'] . "\n"; 
			$log .= "User Agent:\t\t\t" . $_SERVER['HTTP_USER_AGENT'] . "\n"; 
			$log .= "Name:\t\t\t\t" . $name . "\n";  
			$log .= "Idea:\t\t\t\t" . $idea . "\n"; 
			$log .= "Elab:\t\t\t\t" . $elabIdea . "\n"; 
			$log .= "Number Pages:\t\t\t" . $numPages . "\n"; 
			$log .= "Email:\t\t\t\t" . $email . "\n"; 
			$log .= "Successful:\t\t\t" . $send . "\n"; 
			$log .= "---------------------Log file for joshuarogan.com---------------------\n"; 

			toolbox::append_log("freelance_quotes.txt", $log);
		}

	}

?>
<?php 
/**
 *	Deal with any ajax calls here
 *
 */
error_reporting( E_ALL );
ini_set('display_errors', 1);

if(isset($_GET['action'])){

	switch ($_GET['action']) {
		case 'getTweets':
			$sources = array("ForbesTech", "arstechnica", "BillGates", "BBCTech", "TechCrunch", "guardiantech" );
			$timeline = twitter::getTimeline($sources[rand(0,count($sources)-1)], 100);	//Random news source 
			for($i = 0; $i < 1; $i++){
				new tweets(toolbox::makeClickableLinks("&#8220;" . $timeline[0][$i]->text) . "&#8221;", $timeline[0][$i]->user->name);
			} 

			tweets::render_blockquotes();



			break;

		case 'sendMessage':
			//mail("jjjr1122@gmail.com", "Yaaas", "Message");
		
			$name = $_GET['name'];
			$email = $_GET['email'];
			$subject = $_GET['subject'];
			$message = $_GET['message'];

			if(mail("jjjr1122@gmail.com", $subject, $message . "\n Return Email: $email", "From: joshuarogan.com")) $send = "true";
			else $send = "false";

			echo "Message Send: $send";

			//Write to the log file
			$log = "\n---------------------Log file for joshuarogan.com-------------------\n"; 
			$log .= "Created on: \t\t" . date("r") . "\n"; 
			$log .= "IP Address:\t\t\t" . $_SERVER['REMOTE_ADDR'] . "\n"; 
			$log .= "User Agent:\t\t\t" . $_SERVER['HTTP_USER_AGENT'] . "\n"; 
			$log .= "Message:\t\t\t" . $message . "\n";  
			$log .= "Subject:\t\t\t" . $subject . "\n"; 
			$log .= "Email:\t\t\t\t" . $email . "\n"; 
			$log .= "Successful:\t\t\t" . $send . "\n"; 
			$log .= "---------------------Log file for joshuarogan.com---------------------\n"; 

			toolbox::append_log("emails.txt", $log);



			break;

		case 'sendFreelance':
				$name = isset($_GET['name'])? trim($_GET['name']) : "NAME";
				$email = isset($_GET['email'])? trim($_GET['email']) : "EMAIL";
				$numPages = isset($_GET['numberPages'])? trim($_GET['numberPages']) : "numberPages";
				$idea = isset($_GET['idea'])? trim($_GET['idea']) : "IDEA";
				$elabIdea = isset($_GET['elabIdea'])? trim($_GET['elabIdea']) : "Elaborated Idea";


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
			break;
		
		default:
			# code...
			break;
	}



		
}

?>
<?php
	/*
	print_r2($_POST);
	print_r2($_GET);
	*/
	
	$naglowki  = "MIME-Version: 1.0\r\n";
	$naglowki .= "Content-type: text/html; charset=utf-8\r\n";
	
	
	//---tresc----------------------------------------------------------------//
	$temat = "CV_web - ";
		if(isset($_POST['Name']))	$temat .= $_POST['Name'] . " - ";
		if(isset($_POST['Subject']))	$temat .= $_POST['Subject'];
	//------------------------------------------------------------------------//
	
	//---tresc----------------------------------------------------------------//
	$tresc = "Mail ze strony: http://185.25.218.144/cv/<hr>";
		$tresc .= "<br>Name: ";
			if(isset($_POST['Name']))	$tresc .= $_POST['Name'];
		$tresc .= "<br>Email: ";
			if(isset($_POST['Email']))	$tresc .= $_POST['Email'];
		$tresc .= "<br>Subject: ";
			if(isset($_POST['Subject']))	$tresc .= $_POST['Subject'];
		$tresc .= "<br>textarea: ";
			if(isset($_POST['textarea']))	$tresc .= $_POST['textarea'];
		
		$tresc .= "<hr><b>_SERVER</b><br>";
		
		foreach($_SERVER as $key => $s)
		{
			$tresc .= $key . " - " . $s . "<br>";
		}
		
		$tresc .= "<hr><b>_POST</b><br>";
		
		foreach($_POST as $key => $s)
		{
			$tresc .= $key . " - " . $s . "<br>";
		}
		
		$tresc .= "<hr>";
	//------------------------------------------------------------------------//
	
	
	if(isset($_POST))
	{
		if(
			isset($_POST['Name']) && $_POST['Name'] != "Name" &&
			isset($_POST['Email']) && $_POST['Email'] != "Email" &&
			isset($_POST['Subject']) && $_POST['Subject'] != "Subject" &&
			isset($_POST['textarea']) && $_POST['textarea'] != "Message"
		)
		{
			mail("tomasz@kulinowski.pl",$temat,$tresc,$naglowki);
			/*
			//echo "TEMAT: $temat <br> TREŚĆ: $tresc <br> NAGŁÓWEK $naglowki";
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			*/

			unset($_POST['Name']);
			unset($_POST['Email']);
			unset($_POST['Subject']);
			unset($_POST['textarea']);
		}
	}
	
	header("location:contact.php?wyslane=true");
	
	
?>
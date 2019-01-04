<?php
	print_r($_POST);
	print_r($_GET);
	
	$naglowki  = "MIME-Version: 1.0\r\n";
	$naglowki .= "Content-type: text/html; charset=utf-8\r\n";
	
	
	//---temat----------------------------------------------------------------//
	$temat = "CV_web - ";
		if(isset($_POST['name']))	$temat .= $_POST['name'] . " - ";
		if(isset($_POST['subject']))	$temat .= $_POST['subject'];
	//------------------------------------------------------------------------//
	
	//---tresc----------------------------------------------------------------//
	$tresc = "Mail ze strony: " . "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$tresc .= "<br>name: ";
			if(isset($_POST['name']))	$tresc .= $_POST['name'];
		$tresc .= "<br>email: ";
			if(isset($_POST['email']))	$tresc .= $_POST['email'];
		$tresc .= "<br>subject: ";
			if(isset($_POST['subject']))	$tresc .= $_POST['subject'];
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
	
	$stan="";
	

	if(isset($_POST))
	{
		if(
			isset($_POST['name']) && $_POST['name'] != "" &&
			isset($_POST['email']) && $_POST['email'] != "" &&
			isset($_POST['subject']) && $_POST['subject'] != "" &&
			isset($_POST['textarea']) && $_POST['textarea'] != ""	 &&
			isset($_POST['valid_pierwsza_cyfra']) && $_POST['valid_pierwsza_cyfra'] != ""	 &&
			isset($_POST['valid_druga_cyfra']) && $_POST['valid_druga_cyfra'] != ""	 &&
			isset($_POST['valid_wynik']) && $_POST['valid_wynik'] != ""
		)
		{
			if($_POST['valid_wynik'] != "4")
			{
				if($stan == "") $stan = "zly_numerek";
				
				// echo $_SERVER['HTTP_HOST'];
				if(($_SERVER['HTTP_HOST'] == "192.168.1.100" || $_SERVER['HTTP_HOST'] == "kulinowski.pl"))
				{
					//ZMIENNE Z PARAMETRAMI POŁĄCZENIA DO BAZY
					include "db_pass.php";
					/*
						if($_SERVER['HTTP_HOST'] == "****")
						{
							$servername = "****";
							$username = "****";
							$password = "****";
							$dbname = "****";
						}
					*/
					
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					
					$sql = "
						INSERT INTO `contact` 
						(`id`, `name`, `email`, `subject`, `textarea`, `valid_pierwsza_cyfra`, `valid_druga_cyfra`, `valid_wynik`)
						VALUES 
						(NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['textarea']."', '".$_POST['valid_pierwsza_cyfra']."', '".$_POST['valid_druga_cyfra']."', '".$_POST['valid_wynik']."')";
					echo $sql;
					mysqli_query($conn, $sql);
				}
				
			}
			else
			{
				mail("tomasz@kulinowski.pl",$temat,$tresc,$naglowki);
				if($stan == "") $stan = "poszlo";
			}
			
			unset($_POST['name']);
			unset($_POST['email']);
			unset($_POST['subject']);
			unset($_POST['textarea']);
			unset($_POST['valid_pierwsza_cyfra']);
			unset($_POST['valid_druga_cyfra']);
			unset($_POST['valid_wynik']);
		}
			if($stan == "") $stan = "blad";
	}
	
	if($stan == "") $stan = "blad_calkowity";
	
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = "contact.php?wyslane=";
	$loc = "Location: http://$host$uri/$extra";
	
	header($loc.$stan);
	
	
?>
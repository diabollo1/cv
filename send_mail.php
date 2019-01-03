<?php
	/*
	print_r2($_POST);
	print_r2($_GET);
	*/
	
	$naglowki  = "MIME-Version: 1.0\r\n";
	$naglowki .= "Content-type: text/html; charset=utf-8\r\n";
	
	
	//---tresc----------------------------------------------------------------//
	$temat = "CV_web - ";
		if(isset($_POST['name']))	$temat .= $_POST['name'] . " - ";
		if(isset($_POST['subject']))	$temat .= $_POST['subject'];
	//------------------------------------------------------------------------//
	
	//---tresc----------------------------------------------------------------//
	$tresc = "Mail ze strony: " . "http://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
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
	
	
	if(isset($_POST))
	{
		//isset($_POST['valid_wynik']) && $_POST['valid_wynik'] == "4"
		if(
			isset($_POST['name']) && $_POST['name'] != "" &&
			isset($_POST['email']) && $_POST['email'] != "" &&
			isset($_POST['subject']) && $_POST['subject'] != "" &&
			isset($_POST['textarea']) && $_POST['textarea'] != ""			
		)
		{
			mail("tomasz@kulinowski.pl",$temat,$tresc,$naglowki);
			/*
			//echo "TEMAT: $temat <br> TREŚĆ: $tresc <br> NAGŁÓWEK $naglowki";
			echo "<pre>";
			print_r($_POST);
			echo "</pre>";
			*/

			unset($_POST['name']);
			unset($_POST['email']);
			unset($_POST['subject']);
			unset($_POST['textarea']);
			
			header("location:contact.php?wyslane=poszlo");
		}
	}
	
	header("location:contact.php?wyslane=blad_calkowity");
	
	
?>
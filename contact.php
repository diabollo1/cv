<!DOCTYPE HTML>
<html>
<head>
	<?php include("head.php");?>
</head>
<body>

<!-- header -->
<?php include("header.php");?>
<!---->

<!--
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
-->

	<!---//pop-up-box---->			
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="content">
	
	<?php include("menu.php");?>
	
		<div class="company contact-grid">
			<h3 class="clr1">Contact</h3>
			<form id="form_Contact" action="contact.php" method="POST">	
					<input type="text" value="Name" name="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					<input type="text" value="Email" name="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
					<input type="text" value="Subject" name="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
					<textarea cols="77" rows="6" value=" " name="textarea" form="form_Contact" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<div class="send">
						<input type="submit" value="Submit">
					</div>

			
			
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
						echo '
							<br>
							MAIL WYSŁANY
							<br>
							<img id="email_send_2" src="images/email_send3.png" alt=""/>
						';
						unset($_POST['Name']);
						unset($_POST['Email']);
						unset($_POST['Subject']);
						unset($_POST['textarea']);
					}
				}
				
				
			?>
			
			
			</form>
			
			<!--
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
			</div>
			-->
		</div>
		<div class="copywrite">
			<p>© 2015 Curriculum Vitae All Rights Reseverd | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
	</div>
</div>
<!---->
</body>
</html>
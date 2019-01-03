<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
	<?php include("head.php");?>
</head>
<body>

<!-- header -->
<?php include("header.php");?>


		
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="content">
	
	<?php include("menu.php");?>
	
		<div class="company contact-grid">
			<h3 class="clr1"><span class="lang_pl">Kontakt</span><span class="lang_en">Contact</span></h3>
			<form id="form_Contact" action="send_mail.php" method="POST">	
				<input type="text" name="name" placeholder="Imię" required>
				<input type="email" name="email" placeholder="Mail" required>
				<input type="text" name="subject" placeholder="Temat" required>
				<textarea cols="77" rows="6" name="textarea" placeholder="Wiadomość" required></textarea>				
				
				<input type="hidden" name="valid_pierwsza_cyfra" value="2">
				<input type="hidden" name="valid_druga_cyfra" value="2">
				<input type="text" name="valid_wynik" placeholder="Ile jest 2 + 2?" pattern="[0-9]{1}" required>
				
				<div class="send">
					<input type="submit" value="Wyślij">
				</div>
				<?php
					if(isset($_GET['wyslane']))
					{
						echo '<br>';
						switch($_GET['wyslane'])
						{
							case "poszlo":
								echo 'MAIL ZOSTAŁ WYSŁANY!';
								break;
							
							case "blad_calkowity":
								echo 'MAIL NIE ZOSTAŁ WYSŁANY!';
								break;
							
							default:
								echo 'COŚ POSZŁO NIE TAK!';
						}
						
						echo '<br>';
						echo '<img id="email_send_2" src="images/email_send3.png" alt=""/>';
					}
				?>
			</form>
		</div>
		
		<div class="copywrite">
			<p>© 2015 Curriculum Vitae All Rights Reseverd | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
	
	</div>
</div>

</body>
</html>
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
			<h3 class="clr1"><span class="lang_pl">Kontakt</span><span class="lang_en lang_display_none">Contact</span></h3>
			<form id="form_Contact" action="send_mail.php" method="POST">	
				<input type="text" name="name" placeholder="Imię" required>
				<input type="email" name="email" placeholder="Mail" required>
				<input type="text" name="subject" placeholder="Temat" required>
				<textarea cols="77" rows="6" name="textarea" placeholder="Wiadomość" required></textarea>				
				
				<input type="hidden" name="valid_pierwsza_cyfra" value="1">
				<input type="hidden" name="valid_druga_cyfra" value="2">
				<input type="text" name="valid_wynik" placeholder='Ile jest 2 plus 2?' pattern="[0-9]{1}" required>
				
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
								echo '<span class="glyphicon glyphicon-ok-circle glyphicon-big"></span>';
								echo 'Mail został wysłany!';
								break;
							
							case "blad":
								echo '<span class="glyphicon glyphicon-remove-circle glyphicon-big"></span>';
								echo 'Źle uzupełniony formularz!';
								break;
							
							case "zly_numerek":
								echo '<span class="glyphicon glyphicon-cog glyphicon-big"></span>';
								echo 'Jesteś robotem!';
								break;
							
							case "blad_calkowity":
								echo '<span class="glyphicon glyphicon-remove-circle glyphicon-big"></span>';
								echo 'Mail nie został wysłany!';
								break;
							
							default:
								echo '<span class="glyphicon glyphicon-question-sign glyphicon-big"></span>';
								echo 'Coś poszło nie tak!';
						}
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
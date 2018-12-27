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
			<h3 class="clr1">Contact</h3>
			<form id="form_Contact" action="send_mail.php" method="POST">	
				<input type="text" value="Name" name="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
				<input type="text" value="Email" name="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
				<input type="text" value="Subject" name="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
				<textarea cols="77" rows="6" name="textarea" form="form_Contact" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
				<div class="send">
					<input type="submit" value="Submit">
				</div>
				<?php
					if(isset($_GET['wyslane']) && $_GET['wyslane'] == "true")
					{
						echo '<br>MAIL WYSŁANY<br><img id="email_send_2" src="images/email_send3.png" alt=""/>';
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
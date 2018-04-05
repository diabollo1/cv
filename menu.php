
<div class="details_header">
	<ul>
		<li><a href="index.php"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><pl>Strona główna</pl><an>Home page</an></a></li>
		<li><a href="#" onclick="window.print();return false;"><span class="glyphicon glyphicon-print" aria-hidden="true"></span><pl>Wydrukuj</pl><an>Print CV</an></a></li>
		<li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><pl>Napisz</pl><an>Email me</an></a></li>
		<!--<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span><pl>Zdj�cie</pl><an>View photo</an></a></li>-->
		
		<li><input type="checkbox" id="switch222" /><label id="switch_label" for="switch222">Toggle</label></li> English
		
		
		<div id="small-dialog" class="mfp-hide">
			<img src="images/5.png" alt=""/>
		</div>
		<script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
																				
				});
		</script>
	</ul>
</div>
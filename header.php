<div class="col-sm-3 col-md-2 sidebar">
		 <div class="sidebar_top">
			 <h1>Tomasz Kulinowski</h1> 
			 <img src="images/5.png" alt=""/>
		 </div>
		 		 
		<div class="details">
			 <h3><pl>TELEFON</pl><an>PHONE</an></h3>
			 <!--
			 <a href="tel:+48-506-727-456"><p>(+48) 506 727 456</p></a>
			 <div id="numerek" data-last="727 456">(+48) 506<span>XXX XXX</span></div>
			 <div id="number" data-last="1234">949<span>XXXX</span></div>
			 -->
			 <div id="number">(+48) 506 <span>XXX XXX</span><span id="812 154 256" style="display:none;">727 456</span></div>
			 
			 
			 <h3>EMAIL</h3>
			 <p><a href="mailto:toxmasz@kulinoxwski.pl?Subject=[Web%20CV]%20" onmouseover="this.href=this.href.replace(/x/g,'');">tomasz<img class="malpa" src="images/malpa.png" alt=""/>kulinowski.pl</a></p>

			 <address>
			 <h3><pl>UMIEJĘTNOŚCI</pl><an>SKILLS</an></h3>
				<span>Web (HTML, CSS, SQL, JavaScript/jQuery, PHP, XML)</span>
				<span><pl>Programowanie (C, C++, Java)</pl><an>Programming (C, C ++, Java)</an></span>
				<span><pl>Linux (administracja, skrypty)</pl><an>Linux (administration, scripts)</an></span>
				<span><pl>Windows (skrypty bat,VBS)</pl><an>Windows (bat scripts, VBS)</an></span>
				<span>Microsoft Office (Visual Basic)</span>
				<span><pl>grafika (Photoshop, InDesign, Ilustrator, AutoCAD, Corel Draw, Flash)</pl><an>graphics (Photoshop, InDesign, Ilustrator , AutoCAD, Corel Draw, Flash)</an></span>
				<span>Mainframe (z/OS i JCL)</span>
				<span><pl>Serwis PC (software/hardware)</pl><an>PC service (software / hardware)</an></span>
				<span><pl>Prawo jazdy kat. B</pl><an>Driving license category B</an></span>
			 </address>
			 
		</div>
		<div class="clearfix"></div>
</div>

<script>
	/*
	$('#numerek').toggle(function()
	{
		$(this).find('span').text( $(this).data('last') );
	},function()
	{
		$(this).find('span').text( 'XXX XXX' );
	});
	*/
	$('#number').click(function() {
    $(this).find('span').toggle();
});
</script>
$(document).ready(function()
{ 
	//schowanie wszystkich angielskich
	$('an').hide();
	$('pl').show();

	//chowanie i pokazywanie odpowiedniego j�zyka
	$(':checkbox').change(function()
	{
		if($('#switch222').prop("checked"))
		{
			$('an').show();
			$('pl').hide();
		}else
		{
			$('an').hide();
			$('pl').show();
		}
	});
	
});
$(document).ready(function()
{ 
	//schowanie wszystkich angielskich
	$('span.lang_en').hide();
	$('span.lang_pl').show();

	//chowanie i pokazywanie odpowiedniego jêzyka
	$(':checkbox').change(function()
	{
		if($('#switch222').prop("checked"))
		{
			$('span.lang_en').show();
			$('span.lang_pl').hide();
		}else
		{
			$('span.lang_en').hide();
			$('span.lang_pl').show();
		}
	});
	
});
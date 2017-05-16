$(document).ready(function ()
{
	$("#styleGrid").click(function()
	{
		$("productBlock").show();
		$("productBlockList").hide();
	});
$("#styleList").click(function()
	{
		$("productBlock").hide();
		$("productBlockList").show();
	});

}); 


$(document).ready(function(){
    $("#styleGrid").click(function(){
        $("productBlock").show();
          $("productBlockList").hide();
    });
    $("#styleList").click(function(){
        $("productBlockList").show();
         $("productBlock").hide();
    });
});
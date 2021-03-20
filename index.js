function getdata(){
	
	$("#table_head").hide();
	$(".table-responsive").html("");
	$(".loader").show();

	var customer = $("#customer_name").val().trim();
	var name = $("#product_name").val().trim();
	var price = $("#product_price").val().trim();
	
	$.ajax({
		type: 'POST',
		url:'getbook.php',
		data:{"customer":customer,"name":name,"price":price},
		dataType:'html',
		success:function(res)
		{
			$("#table_head").fadeIn();
			$(".table-responsive").html(res);
			$(".loader").hide();
		}
	});
}

$(document).ready(function(){
	
getdata();

$(document).on("keyup", "#product_price", function() {
	var price1 = $(this).val().trim()!="" ? $(this).val() : "0";
	$("#product_range").val(price1);
});
	
$(document).on("change", "#product_range", function() {
	$("#product_price").val($(this).val());
});

});
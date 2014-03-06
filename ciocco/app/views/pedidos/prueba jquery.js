$(document).ready(function(){
	$('#enviar').click(function(){
		var miArray = new Array(3);
		
		miArray[0] = 155;
		miArray[1] = 4;
		miArray[2] = 499;
		
		alert(miArray);	
	});
});

$(document).ready(function(){
	$('#submit').click(function(){
		var selectedItems = new Array();
		
		$("input[@name='data[Pedido][detalle][]']:checked").each(function(){
			selectedItems.push($(this).val());
		});
		
		alert(selectedItems);
	});
});

ok

$(document).ready(function(){
	$('.submit').click(function(){
		var miArray = new Array(3);
		
		miArray[0] = 155;
		miArray[1] = 4;
		miArray[2] = 499;
		
		alert(miArray);	
	});
});

data[Pedido][detalle][]
itemSelect[]


var values = new Array();
$.each($("input[@name='features[]']:checked"), function() {
        values.push($(this).val());
});
var createListingString = values.join();

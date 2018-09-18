$(document).ready(function() {
	$("#myInput").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myList li").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});

	$(".kategorie").click(function() {
		var value = $(this).text();
		if(value!="Gesamtes Angebot"){
			$("#myList li").filter(function() {
				$(this).toggle($(this).hasClass(value))
			});
		}
		else{
			$("#myList li").filter(function() {
				$(this).toggle($(this).hasClass("list-group-item"))
			});
		}
		
		
		
		
		
	});
	
});
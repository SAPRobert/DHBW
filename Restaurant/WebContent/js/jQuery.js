$(document).ready(function() {
		showProducts("Alles");
	});

function showProducts(str) {
	    if (str == "") {
	        document.getElementById("produkte").innerHTML = "";
	        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("produkte").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","produktFilter.php?q="+str,true);
	        xmlhttp.send();
	    }
	};

	


	/*
$(document).ready(function() {
	

	
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById("ajax").innerHTML =
	      this.responseText;
	    }
	  };
	  xhttp.open("Post", "allprod.php", true);
	  xhttp.send();
	  
	  $("#Alles").click(function() {  
		  xhttp.open("GET", "allprod.php", true);
		  xhttp.send();
		});
	  
	  $("#Vorspeise").click(function() {  
		  xhttp.open("GET", "vor.php", true);
		  xhttp.send();
		});

	$("#Hauptspeise").click(function() {
		  xhttp.open("GET", "haupt.php", true);
		  xhttp.send();
		});

	$("#Nachspeise").click(function() { 
		  xhttp.open("GET", "nach.php", true);
		  xhttp.send();
		});

	$("#Getränke").click(function() { 
		  xhttp.open("GET", "getr.php", true);
		  xhttp.send();
		});
	    */
	  
	/*$("#myInput").click("keyup", function() {
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
	
	
		
			  var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			      document.getElementById("ajax").innerHTML =
			      this.responseText;
			    }
			  };
			  xhttp.open("GET", "WebContent/testcon.php", true);
			  xhttp.send();
			
	
	
});
*/

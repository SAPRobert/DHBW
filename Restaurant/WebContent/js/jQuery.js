$(document).ready(function() {
		showProducts("Alles");
		
	});


//Anzeigen der produktFilter.php in der index.php in Spalte "Produkte"
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
	
	
//Anzeigen der details.php in der index.php in Spalte "Details"
function showOneProduct(str) {
	    if (str == "") {
	        document.getElementById("details").innerHTML = "";
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
	                document.getElementById("details").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","details.php?q="+str,true);
	        xmlhttp.send();
	    }
	};
	
function addToBasket(){
	detailElement = $("#anzeige").children();
	detailElementId = detailElement.attr('id');
	detailElementMenge = $("#ione").val();
	var detail=[detailElementId, detailElementMenge];
	
	   if (detailElementId == "") {
	        document.getElementById("testfenster").innerHTML = "";
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
	                document.getElementById("testfenster").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","addBestellung.php?q="+detail,true);
	        xmlhttp.send();
	        showOneProduct(detailElementId);
	   }
	   
	//alert(detailElementId + "mal" + detailElementMenge);
};

function deleteBasket(){
	xmlhttp.open("GET","deleteBestellung.php?q="+detail,true);
    xmlhttp.send();
	
};





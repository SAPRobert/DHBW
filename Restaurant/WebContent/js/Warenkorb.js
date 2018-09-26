$(document).ready(function() {
		showBasket("00");
		
	});



function showBasket(str){
	   if (str == "") {
	        document.getElementById("rechnung").innerHTML = "";
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
	                document.getElementById("rechnung").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","showBestellung.php?q="+str,true);
	        xmlhttp.send();
	    }
	   
	//alert(detailElementId + "mal" + detailElementMenge);
};
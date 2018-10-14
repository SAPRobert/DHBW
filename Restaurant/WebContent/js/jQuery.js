$(document).ready(function() {
		showProducts("Alles");
		showBasketCounter();
		var canvas = document.getElementById("myCanvas");
	    var ctx = canvas.getContext("2d");
	    var img = document.getElementById("scream");
	    ctx.drawImage(img, 10, 10);
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
	detailElementMenge = $("#input1").val();
	var detail=[detailElementId, detailElementMenge];
	
	   if (detailElementId == "") {
	        document.getElementById("count").innerHTML = "";
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
	                document.getElementById("count").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET","addProductToB.php?q="+detail,true);
	        xmlhttp.send();
	   }
};

function showBasketCounter(str){
	
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("count").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","basketCounter.php?q="+str,true);
        xmlhttp.send();
};

function plus(){
	var currentVal = parseInt($("#input1").val());
	if(currentVal<20){
	$("#input1").val(currentVal + 1);
	};
};

function minus(){
	var currentVal = parseInt($("#input1").val());
	if(currentVal >1){
	$("#input1").val(currentVal -1);
	}
};

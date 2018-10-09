$(document).ready(function() {
		showProducts("Alles");
		showBasketCounter();
		
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
	        //showOneProduct(detailElementId);
	   }
	   
	//alert(detailElementId + "mal" + detailElementMenge);
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
        //showOneProduct(detailElementId);
   
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




//
//jQuery(document).ready(function(){
//    // This button will increment the value
//    $('[data-quantity="plus"]').click(function(e){
//        // Stop acting like a button
//        e.preventDefault();
//        // Get the field name
//        fieldName = $(this).attr('data-field');
//        // Get its current value
//        var currentVal = parseInt($('input[name='+fieldName+']').val());
//        // If is not undefined
//        if (!isNaN(currentVal)) {
//            // Increment
//            $('input[name='+fieldName+']').val(currentVal + 1);
//        } else {
//            // Otherwise put a 0 there
//            $('input[name='+fieldName+']').val(0);
//        }
//    });
//    // This button will decrement the value till 0
//    $('[data-quantity="minus"]').click(function(e) {
//        // Stop acting like a button
//        e.preventDefault();
//        // Get the field name
//        fieldName = $(this).attr('data-field');
//        // Get its current value
//        var currentVal = parseInt($('input[name='+fieldName+']').val());
//        // If it isn't undefined or its greater than 0
//        if (!isNaN(currentVal) && currentVal > 0) {
//            // Decrement one
//            $('input[name='+fieldName+']').val(currentVal - 1);
//        } else {
//            // Otherwise put a 0 there
//            $('input[name='+fieldName+']').val(0);
//        }
//    });
//});









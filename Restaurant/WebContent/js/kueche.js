function setErledigt(str){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET","http://localhost/dhbw/Restaurant/webcontent/php/setErledigt.php?q="+str,true);
    xmlhttp.send();
    setTimeout("location.reload(true);", 100);
};
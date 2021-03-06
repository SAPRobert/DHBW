<%@ page language="java" contentType="text/html; charset=utf-8"
	pageEncoding="utf-8"%>

<%@ page import="java.sql.*,java.io.*,java.util.*,beanServ.*" isThreadSafe="false" %>

<!DOCTYPE html>
<html>
<head>
<style>
  table{
  background-color: rgba(255,255,255,0.8);
  }
  /*
  #big th {
  width: 300px;
  }
  #small th {
  width: 100px;
  } */
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="/dhbw/Restaurant/webcontent/css/style.css">
<link href='https://fonts.googleapis.com/css?family=Bilbo Swash Caps' rel='stylesheet'> -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="http://localhost/dhbw/Restaurant/webcontent/css/style.css">
 --><script src="http://localhost/dhbw/Restaurant/webcontent/js/kueche.js"></script>
<link rel="icon" href="http://localhost/dhbw/Restaurant/webcontent/pictures/favicon.ico" type="image/ico">
<title>Bestellungen</title>

</head>

<body>

<% 
//if(login){
	
  String sDbDrv = "com.mysql.jdbc.Driver";
  String sDbUrl = "jdbc:mysql://localhost:3306/restaurant?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";
  String sUsr   = "root";
  String sPwd   = "";
  String sTable = "bestellungen";
  String sSql   = "SELECT bestellungen.b_id, produkte.prod_name, bestellungen.b_anz, bestellungen.b_tisch, bestellungen.b_time FROM bestellungen LEFT JOIN produkte ON bestellungen.prod_ID=produkte.prod_ID WHERE b_erl = 0";
  
  response.setIntHeader("Refresh",5); //Seite nach 5 Sek. neu laden
  
%>

<br>

<%
   
  { 
    // out.println( sSql + "<br><br>" );
    Connection cn = null;
    Statement  st = null;
    ResultSet  rs = null;
    
    try {
      Class.forName( sDbDrv );
      cn = DriverManager.getConnection( sDbUrl, sUsr, sPwd ); //erzeugt Verbindung zu DB
      st = cn.createStatement();
      rs = st.executeQuery( sSql );
      ResultSetMetaData rsmd = rs.getMetaData();
      int n = rsmd.getColumnCount();
      out.println( "<label>" + meinBean.meineFunktion() + "</label>"); //Aufruf Java Bean Funktion
      %>
      <table class="table table-striped">
      <thead>
      <th>Bestellnummer</th>
      <th>Produkt</th>
	  <th>Anzahl</th>
	  <th>Tisch</th>
	  <th>Bestellungseingang</th>
	  <th>Abschluss</th>
	  </thead>
	  <%

      while( rs.next() )
      {
        out.println( "</tr><tr>" );
        
        for( int i=1; i<=n; i++ ) 
          out.println( "<td>" + rs.getString( i ) + "</td>" ); //Ausgabe der DB-Werte der einzelnen Spalten
          out.println("<td><button id=" + rs.getString (1) + " onclick=setErledigt(this.id)>Erledigt</button></td>"); //Einfügen Button
         
      }
      
	  out.println("</tr></table>");
    } finally {
      try { if( null != rs ) rs.close(); } catch( Exception ex ) {/*ok*/}
      try { if( null != st ) st.close(); } catch( Exception ex ) {/*ok*/}
      try { if( null != cn ) cn.close(); } catch( Exception ex ) {/*ok*/}
    }
  }
//}
  
  
%>

<br>

</body>
</html> 
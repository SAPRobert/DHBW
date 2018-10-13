<%@ page language="java" contentType="text/html; charset=utf-8"
	pageEncoding="utf-8"%>

<%@ page import="java.sql.*,java.io.*,java.util.*,beanServ.*" isThreadSafe="false" %>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="http://localhost/dhbw/Restaurant/webcontent/css/style.css">
<title>Bestellungen</title>
<style>
<<<<<<< HEAD
  table{
  border: 1px solid grey;
  text-align: left;
  background-color: rgba(223, 219, 194,0.85);
  }
  tr {
=======
   table{
  background-color: rgba(255,255,255,0.8);
>>>>>>> master
  }
  /*
  #big th {
  width: 3;
  }
  #small th {
  width: 100px;
<<<<<<< HEAD
  }
  body{
  overflow: auto;
  }
  p {
  color: white;
  }
</style>
=======
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

<title>Bestellungen</title>
<style>
button{

}
</style>

>>>>>>> master
</head>

<body>

<% 

//if(login){
	
  String sDbDrv = "com.mysql.jdbc.Driver";
  String sDbUrl = "jdbc:mysql://localhost:3306/restaurant?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";
  String sUsr   = "root";
  String sPwd   = "";
  String sTable = "bestellungen";
  String sSql   = "SELECT bestellungen.prod_ID, bestellungen.b_id, produkte.prod_name, bestellungen.b_anz, bestellungen.b_tisch, bestellungen.b_time FROM bestellungen LEFT JOIN produkte ON bestellungen.prod_ID=produkte.prod_ID WHERE b_erl = 0";
  
  //response.setIntHeader("Refresh",5);
  
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
      cn = DriverManager.getConnection( sDbUrl, sUsr, sPwd );
      st = cn.createStatement();
      rs = st.executeQuery( sSql );
      ResultSetMetaData rsmd = rs.getMetaData();
      int n = rsmd.getColumnCount();
      out.println( "<label>" + meinBean.meineFunktion() + "</label>"); 
      %>
<<<<<<< HEAD
      <th id="small">Bestellungs-ID</th>
=======
      <table class="table table-striped">
      <thead>
      <th id="big">Bestellnummer</th>
>>>>>>> master
      <th id="big">Produkt</th>
	  <th id="small">Anzahl</th>
	  <th id="small">Tisch</th>
	  <th id="big">Bestellungseingang</th>
<<<<<<< HEAD
	  <th id="big">Abschluss</th>
=======
	  <th>Abschluss</th>
	  </thead>
>>>>>>> master
	  <%
      /* for( int i=2; i<=n; i++ )
        out.println( "<th>" + rsmd.getColumnName( i ) + "</th>" ); */
      while( rs.next() )
      {
        out.println( "</tr><tr>" );
        
        for( int i=2; i<=n; i++ ) 
          out.println( "<td>" + rs.getString( i ) + "</td>" );
<<<<<<< HEAD
          out.println("<td><button id=" + rs.getString (2) + ">Erledigt</button></td>");
=======
          String bid=rs.getString(2);
          out.println("<td><button id=" + rs.getString (2) + " onclick=setErledigt(this.id)>Erledigt</button></td>"); 
         
>>>>>>> master
      }
      
	  out.println("</tr></table>");
    } finally {
      try { if( null != rs ) rs.close(); } catch( Exception ex ) {/*ok*/}
      try { if( null != st ) st.close(); } catch( Exception ex ) {/*ok*/}
      try { if( null != cn ) cn.close(); } catch( Exception ex ) {/*ok*/}
    }
  }
//}

<<<<<<< HEAD
  out.print( "<p>Es ist: " + meinBean.meineFunktion() + "</p>"); 
=======
  
>>>>>>> master
  
%>

<br>

</body>
</html> 
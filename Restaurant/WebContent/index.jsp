<%@ page language="java" contentType="text/html; charset=utf-8"
	pageEncoding="utf-8"%>

<%@ page import="java.sql.*,java.io.*,java.util.*,beanServ.*" isThreadSafe="false" %>

<!DOCTYPE html>
<html>
<head>
<style>
  table{
  border: 1px solid grey;
  text-align: left;
  }
  #big th {
  width: 300px;
  }
  #small th {
  width: 100px;
  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="http://localhost/dhbw/Restaurant/webcontent/css/style.css">
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
  String sSql   = "SELECT bestellungen.prod_ID, produkte.prod_name, bestellungen.b_anz, bestellungen.b_tisch, bestellungen.b_time FROM bestellungen LEFT JOIN produkte ON bestellungen.prod_ID=produkte.prod_ID WHERE b_time >= DATE_SUB(NOW(),INTERVAL 1 HOUR)";
  
  response.setIntHeader("Refresh",5);
  
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
      out.println( "<table><tr>" );  
      %>
      <th id="big">Produkt</th>
	  <th id="small">Anzahl</th>
	  <th id="small">Tisch</th>
	  <th id="big">Bestellungseingang</th>
	  <%
      /* for( int i=2; i<=n; i++ )
        out.println( "<th>" + rsmd.getColumnName( i ) + "</th>" ); */
      while( rs.next() )
      {
        out.println( "</tr><tr>" );
        for( int i=2; i<=n; i++ )
          out.println( "<td>" + rs.getString( i ) + "</td>" );
      }
	  out.println( "</tr></table>" );
    } finally {
      try { if( null != rs ) rs.close(); } catch( Exception ex ) {/*ok*/}
      try { if( null != st ) st.close(); } catch( Exception ex ) {/*ok*/}
      try { if( null != cn ) cn.close(); } catch( Exception ex ) {/*ok*/}
    }
  }
//}
/*else {
  out.println("<p>Falsches Passwort</p>");
}*/
  out.println( "<p>" + meinBean.meineFunktion() + "</p>"); 
  
%>

<br>

</body>
</html> 
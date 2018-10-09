<%@ page language="java" contentType="text/html; charset=utf-8"
	pageEncoding="utf-8"%>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="/Restaurant/css/style.css">
<title>Bestellungen</title>
</head>
<body>
<html>
<body>

<%@ page import="java.sql.*,java.io.*,java.util.*" isThreadSafe="false" %>

<jsp:useBean id = "Date" class = "java.util.Date" />
<p>Es ist <%= Date %> Uhr.<

<%
  
  
  String sDbDrv = "com.mysql.jdbc.Driver";
  String sDbUrl = "jdbc:mysql://localhost:3306/restaurant?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";
  String sUsr   = "root";
  String sPwd   = "";
  String sTable = "bestellungen";
  String sSql   = "SELECT bestellungen.prod_ID, produkte.prod_name, bestellungen.b_anz, bestellungen.b_tisch, bestellungen.b_time FROM bestellungen LEFT JOIN produkte ON bestellungen.prod_ID=produkte.prod_ID";

  /*if( null == sDbDrv || 0 >= sDbDrv.length() ||
      null == sDbUrl || 0 >= sDbUrl.length() )
  {
    out.println( "<br>Fehler: Mindestens Db-Treiber und Db-URL "
               + "sowie Tabellenname "
               + "müssen ausgefüllt werden!<br>" );
  }*/
  /* response.setIntHeader("Refresh",5);
  
  Calendar calendar = new GregorianCalendar();
  String am_pm;
  
  int hour = calendar.get(Calendar.HOUR);
  int minute = calendar.get(Calendar.MINUTE);
  int second = calendar.get(Calendar.SECOND);
  
  if(calendar.get(Calendar.AM_PM) == 0)
      am_pm = "AM";
   else
      am_pm = "PM";
      hour = hour + 12;
   String CT = hour+":"+ minute +":"+ second +" "/*+ am_pm*/;
   //out.println("Crrent Time: " + CT + "\n");
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
      out.println( "<table border=1 cellspacing=0><tr>" );  
      %>
      <th>Produkt</th>
	  <th>Anzahl</th>
	  <th>Tisch</th>
	  <th>Bestellungseingang</th>
	  <%
      /*for( int i=2; i<=n; i++ )
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
%>

<br>

</body>
</html>
</body>
</html>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="/dhbw/Restaurant/webcontent/css/style.css">
<title>Bestellungen</title>
</head>
<body>
<html>
<body>

<%@ page import="java.sql.*" isThreadSafe="false" %>

<%
  String sDbDrv = request.getParameter( "prmDbDrv" );
  String sDbUrl = request.getParameter( "prmDbUrl" );
  String sUsr   = request.getParameter( "prmUsr" );
  String sPwd   = request.getParameter( "prmPwd" );
  String sTable = request.getParameter( "prmTab" );
  String sSql   = request.getParameter( "prmSql" );

  if( null != sTable && 0 <  sTable.length() &&
     (null == sSql   || 0 == sSql.length())  )
    sSql = "SELECT * FROM " + sTable;

  if( null == sDbDrv || 0 >= sDbDrv.length() ||
      null == sDbUrl || 0 >= sDbUrl.length() )
  {
    out.println( "<br>Fehler: Mindestens Db-Treiber und Db-URL "
               + "sowie Tabellenname "
               + "müssen ausgefüllt werden!<br>" );
  }
  else
  {
    out.println( sSql + "<br><br>" );
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
      for( int i=1; i<=n; i++ )    // Achtung: erste Spalte mit 1 statt 0
        out.println( "<th>" + rsmd.getColumnName( i ) + "</th>" );
      while( rs.next() )
      {
        out.println( "</tr><tr>" );
        for( int i=1; i<=n; i++ )  // Achtung: erste Spalte mit 1 statt 0
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

<br><a href="readKitchen.html">Zurück zum Eingabeformular</a>

</body>
</html>
</body>
</html>
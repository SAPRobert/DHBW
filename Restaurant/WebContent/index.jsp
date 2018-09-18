<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Hallo Welt</title>
</head>
<body>
<%

//Connection conn = null;
try {
// Laut MySQL-Web-Seiten ist zusaetzlicher Aufruf von
// newInstance() wegen moeglicher Probleme in
// manchen Java-Varianten anzuraten.
Class.forName("com.mysql.jdbc.Driver").newInstance();
jdbc:mysql://localhost/restaurant?user=root&password=root;
out.println("<b>MySQL-Treiber wurde geladen!</b>");
}
catch(ClassNotFoundException e) {
out.println("<b>MySQL-Treiber konnte nicht geladen werden</b>");
out.println("<pre><code>");
out.println(e.getStackTrace());
out.println("</code></pre>");
}
%>
</body>
</html>
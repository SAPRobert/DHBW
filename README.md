# DHBW
Project "Webprogramming" repository

Einführung

In dieser Aufzeichnung wird dargelegt, wie das Projekt in der Vorlesung Webpro-grammierung bei Prof. Dr. Konrad Preiser umgesetzt wurde und dient zur

Dokumentation des Projektes „Lokales Bestellsystem für die Gastronomie“.

Ziel des Projektes

Ziel des Projektes war es, ein Bestellsystem für die Gastronomie zu entwickeln, die es ermöglicht, die Abläufe in einem solchen Unternehmen zu digitalisieren. Dazu sollte einerseits die Möglichkeit geschaffen werden, den Kunden selbst-ständig seine Bestellung tätigen zu lassen, als auch das Personal bei der Aus-übung ihrer Tätigkeiten zu unterstützen. Im Gesamten ist es wichtig zu erwähnen, dass alle Funktionen dazu dienen müssen, einen Mehrwert für den potentiellen Kunden zu generieren.

Das Ziel des Moduls lag darin, sich ein möglichst breites Wissen über die ver-schiedenen Techniken der Webprogrammierung anzueignen. Die ist nach unse-rer Einschätzung auch erreicht wurden

Aufbau der Dokumentation

Zunächst werden die inhaltlichen und die technischen Anforderungen dokumen-tiert und kurz auf einzelne wichtige Sprachen und Techniken eingegangen. Im Anschluss daran wird die Umsetzung, also die Herangehensweise beschrieben.

Im darauffolgendem Kapitel wird schrittweise auf die einzelnen Funktionalitäten eingegangen. Hierbei wurde nach inhaltlichen Themen gegliedert und nicht nach den verwendeten Techniken, um eine möglichst aufschlussreiche Darlegung der Webseite zu präsentieren.

Zum Abschluss wird unsere Zeitschätzung mit dem realen Aufwand verglichen, das fertige Projekt zusammengefasst und ein Fazit gezogen wie auch ein Aus-blick auf weitere Entwicklungen gegeben.

1 Anforderungen

1.1 Inhaltliche Anforderungen

Die thematische Anforderung bestand darin, ein lokales Bestellsystem für die Gastronomie, also für Restaurants, Cafes oder ähnlich zu entwickeln. Hierbei sollte es grob eine Bestellseite und eine Seite für die Küche geben als inhaltliche Trennung geben. Die Bestellseite soll dabei die Anforderung erfülen, dem Kun-den die Möglichkeit zu geben, anstatt mit einer herkömmlichen Speisekarte direkt auf der Seite Speisen und Getränke bestellen zu können. Die Küchenseite wie-derum soll eine Ausgabe der Bestellungen darstellen können. Des Weiteren soll zu jeder Bestellung eine Rechnung erzeugt werden.

Es sind zahlreiche weitere Funktionen denkbar, wie z.B. eine Berechnung der individuellen Wartezeit, sowie eine Ruftaste bei eventuellen Sonderwünschen der Kunden. Im Rahmen dieser Arbeit muss sich jedoch aus Zeitgründen auf solide Grundfunktionen beschränkt werden.

1.2 Technische Anforderungen

Die technischen Anforderungen wurden durch den Dozenten definiert. Diese wer-den folgend kurz erläutert.

1.2.1 Apache/Tomcat

Es mussten zwei Webserver installiert und verbunden werden, um den Zugriff über den Webbrowser nur über einen der Server laufen zu lassen. Dabei dient der Apache-Webserver als Hauptserver, der Tomcat wurde entsprechend be-kannt gemacht. Apache ist ein klassischer Webserver, um Anfragen des Clients entgegenzunehmen und beispielsweise die Programmiersprache PHP zu unter-stützen. Tomcat dient dazu, JSP’s und andere Java basierende Techniken in HTML Code zu übersetzten.

1.2.2 Datenbank

Um eine dynamische Website zu erhalten und Daten zu verwalten, stellt der Ein-satz einer Datenbank ebenfalls eine Anforderung dar. Dabei wurde eine MySQL Datenbank genutzt. Der Datenbankzugriff soll dabei über PHP und JDBC (java-seitig) ermöglicht werden.

1.2.3 Weitere Techniken

Als eine der Haupttechniken wurde PHP (Hypertext Preprocessor) zum Erzeugen von Website genutzt. Mit PHP können Websiten dynamisch erzeugt und etwa Daten direkt aus einer Datenbank geladen werden. Dabei wird das an den Brow-ser zu übertragene HTML schrittweise erzeugt, bis das PHP-Skript zu Ende ge-laufen ist.

Als weitere Sprache zum dynamischen Erzeugen einer Website wurde JSP (Ja-vaServerPage) genutzt. Dabei wird statisches HTML im Java Code deklariert, und kann durch dynamische Elemente entsprechend erweitert werden.

Um statischen HTLM Code dynamisch zu machen, bietet sich AJAX (Asynchro-nous JavaScript and XML) an. Dabei werden asynchron aktuelle Daten/Website-Inhalte vom Server abgeholt und in der HTML Seite wiedergegeben. Dazu wird meist ein Element über dessen ID bestimmt, in welches der geladene Inhalt ge-spielt wird. Dadurch wird vermieden, die komplette Seite neu laden zu müssen

Ein JavaBean zu nutzen ist ebenfalls Anforderung der Website. JavaBeans die-nen dazu eine allgemeine Schnittstelle zu Daten zu erhalten.

Ein Servlet wurde ebenfalls implementiert. Ein Servlet ist eine Java-Klasse, die Anfragen eines Clients entgegennimmt und beantwortet. Dabei wird die Antwort dynamisch erzeugt und liegt nicht wie HTML schon statisch vor.

Um die Website weiter dynamisch zu gestalten wurde eine SVG (Scalable Vector Graphic) dynamisch erzeugt. Bei dieser Speicherung einer Grafik werden nicht Informationen zu Pixeln, sondern Pfade von Vektoren gespeichert. Dabei kann die Grafik beliebig skaliert werden, ohne Qualitätseinbußen zu riskieren. Außer-dem kann der Code der Grafik dynamisch verändert oder erzeugt werden.

Um eine sinnvolle Benutzereingabe zu schaffen, wurde ein HTML Formular ein-gebaut. Über dieses können Daten des Nutzers gemeinsam verarbeitet werden.

Weiterhin werden Cookies zur Benutzeridentifikation genutzt. Diese Informatio-nen werden direkt im Browser gespeichert und können von den Webservern aus-gelesen werden.

2 Projektaufbau

2.1 Vorgehen

Zum Projektstart wurde ein Git-Repository auf github.com angelegt.1 Dies ermög-licht dem Team eine optimale Zusammenarbeit und eine Möglichkeit zur Daten-sicherung. Weiterhin wurde in Microsoft Teams ein entsprechendes Projekt an-gelegt, um eine optimale Kollaboration zu fördern. Hier wurden Produktbilder und Anforderungen ausgetauscht. Weiterhin wurde ein Modul zum Projektmanage-ment hinzugefügt, um die Aufgabenpakete dem jeweiligen Projektmitglied zuord-nen zu können. Die Datenbank wurde hingegen händisch über den Teamsfolder synchronisiert.

2.2 Mock-Up

Nachdem die Arbeitsumgebung entsprechend eingerichtet wurde, ist ein Mockup der Bestellseite konzipiert wurden:

Abbildung 1 Mockup der Bestellseite

2.3 Datenbank

Es wurde über phpMyAdmin eine PHP Datenbank „Restaurant“ angelegt. Diese um-fasst die Tabellen Produkte und Bestellungen. Auf eine Tabelle Kategorien wurde aufgrund der Einfachheit bewusst verzichtet.

Die Tabelle „Produkte“ umfasst die Attribute prod_id[int], prod_name[text], prod_kat[text], prod_details[text], prod_preis[float], prod_bild[text].

Die Tabelle „Bestellungen“ umfasst b_id[int], prod_id[int, b_anz[int], b_tisch[int], b_time[ti-mestamp], b_erl[tinyint]

2.4 Ordnerstruktur

Der Workspace DHBW, welcher über GitHub synchronisiert ist, weist mit dem Projekt Res-taurant folgende Struktur auf: Die bei einem dy-namischen Webprojekt vorhandenen Standard-ordner blieben unangetastet, nur „WebContent“ wurde um css, html, js, php, pictures und tcpdf ergänzt. Somit wurde eine Übersichtlichkeit im Projekt erreicht.

3 Entwicklung und Umsetzung

3.1 Startseite

Die Startseite ist eine HTML-Seite mit zwei Buttons, „Küche“ und „Kunde“. Durch das Tippen auf den „Küche“-Button gelangt man auf die JSP-Seite kitchenLog.jsp, auf der ein Passwort eingegeben werden muss, um die JSP-Seite mit allen offenen Be-stellungen sehen und verwalten zu können.

Mit Klick auf den Button „Kunde“ gelangt man auf die Startseite des Kundenbereichs, „login.html“.

3.2 Küchen-Login

Der Login, um auf die Küchen-Seite zu gelangen, ist eine JSP-Seite auf der per HTML-Forms ein Input-Feld mit dem Namen Passwort erzeugt wird.

In dieses Feld muss, wie der Name sagt, ein Passwort eingegeben werden. Um den Sicherheitsanforderungen gerecht zu werden, wurde autocomplete ausgeschaltet, was bewirkt, dass vorherige Eingaben in das Passwort-Feld nicht angezeigt werden. Des weiteren wurde der type des Input-Feldes auf password gesetzt, wodurch die Eingabe nicht ausgeschrieben, sondern in Form von Punkten angezeigt wird.

Die Eingabe des Passwortes wird nach Bestätigung durch Klicken auf den Login-Button an ein Servlet gesendet, welches den Wert auf seine Richtigkeit überprüft. Hierzu wird über eine if-Anweisung die Eingabe des Benutzers mit dem korrekten Passwort, hirsch, verglichen.

Bei falscher Eingabe wird die Seite kitchenLog.jsp erneut geladen und der Hinweis „Falsches Passwort!“ ausgegeben. Dort kann das Passwort erneut eingegeben wer-den.

3.3 Küchen-Seite

Bei einer korrekten Eingabe des Passwortes wird der User auf die Seite index.jsp weitergeleitet, auf der alle Bestellungen angezeigt und verwaltet werden können. Auf dieser Seite wird zunächst versucht, über die Datenbank-URL, den User und das dazugehörige Passwort eine Verbindung zu der benötigten Datenbanktabelle „Be-stellungen“ zu erzeugen. Dabei ist mit der Angabe der Datenbank-URL jdbc:mysql://localhost:3306/restaurant zunächst der Fehler aufgetreten, bei dem der Zeitzonen-Wert „Mitteleuropäische Sommerzeit“ nicht erkannt wird. Deswegen musste die Datenbank-URL folgendermaßen angepasst werden:

jdbc:mysql://localhost:3306/restaurant?useUnicode=true&useJDBCCompliantTime-zoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC.

Die Anpassung bewirkt, dass die Server-Zeitzone auf „UTC“ gesetzt wird.

Ist die Verbindung erzeugt, muss der folgende SQL-Befehl ausgeführt werden:

SELECT bestellungen.prod_ID, bestellungen.b_id, produkte.prod_name, bestellun-gen.b_anz, bestellungen.b_tisch, bestellungen.b_time FROM bestellungen LEFT JOIN produkte ON bestellungen.prod_ID=produkte.prod_ID WHERE b_erl = 0.

3.4 Cookie

Um zur Bestellseite zu gelangen, wird zunächst durch ein HTML Formular die Tisch-nummer als Cookie gesetzt und über die GET Methode bekannt gemacht.

Dieser Cookie ist einen Tag lang gültig. Er wird später im Bestellprozess die Aufgabe haben, die Bestellung dem korrekten Tisch zuzuordnen.

3.5 Kategorien

Die linke Spalte enthält laut Mock-Up die Kategorien, welche die Produkte filtern soll.

Die Funktion showProducts(this.id) führt einen AJAX Befehl aus, welcher die ID an die produktFilter.php weitergibt. Dort wird dann ein Datenbankzugriff und ein SQL Zugriff verarbeitet, welcher die Speisen der ausgewählten Kategorie in der mittleren Spalte anzeigt.

3.6 Produkte

Die Speisen in der mittleren Spalte sind als Listenelemente angelegt, welchen bei der Erzeugung durch PHP die Produkt ID und eine erneute onclick() Funktion mitgegeben werden.

Durch diese Attribute der einzelnen Listenelemente (= Produkte) sind diese klick-bar und führen bei Aktivierung eine erneute AJAX Funktion aus, welche die Pro-dukt ID an die details.php schickt.

3.7 Details

Diese wiederum fragt aus der Datenbank den Pfad zum Produktbild, den Pro-duktnamen, die Beschreibung und den Preis ab und gibt dies entsprechend in der dritten Spalte aus.

In der dritten Spalte existieren zusätzlich zwei fixe Buttons zum Erhöhen bzw. Verringern der gewünschten Anzahl, ein Inputfeld als auch ein Button zum Hin-zufügen der Produkte zum Warenkorb.

Der Warenkorb weist folgende Struktur auf: Er ist eine Sessionvariable vom Typ, ist also während der gesamten Session aus als superglobal Variable von allen Dateien aus erreichbar. Es handelt sich hier um ein zweidimensionales Array. Die erste Dimension steht jeweils für eine Produktart, die sich im Warenkorb befindet, die dazugehörige weite Dimension besteht aus [Produkt ID, Anzahl].

Somit müssen diese beiden Attribute beim Hinzufügen eines Produktes zum Wa-renkorb geliefert werden. Dies wurde gelöst, indem ein DIV Container um die Ausgabe der rechten Spalte platziert wurde, welcher die ID des Produkts enthält. Die Anzahl wird durch das genannte Inputfeld geliefert.

Erneut wird über AJAX das Array mit den beiden Attributen an die PHP Datei addProductToB.php geschickt, welche dann das Array zum Warenkorb hinzufügt.

3.8 Warenkorb

Um zum Warenkorb zu gelangen, existiert oben rechts ein Icon zum Navigieren zur warenkorb.html.

Hier wird der Warenkorb inkl. der Zwischensummen und Endsumme dargestellt, es gibt Funktionalitäten zum Löschen einzelner Poste sowie des gesamten Wa-renkorbs. Des Weiteren finden sich ein Button zum Bestätigen der Bestellung, sowie die Möglichkeit, eine Rechnung im .pdf Format zu generieren.

Der Warenkorb wird technisch über zwei Schleifen realisiert:

In der ersten Schleife wird eine SQL Abfrage nach der Produkt ID durchgeführt, in der zweiten erfolgt die formatierte Ausgabe der einzelnen Zeilen und die Be-rechnungen werden durchgeführt.

Die Funktion zum Löschen einzelner Produkte, funktioniert über einen unset($Ar-ray1[$point]) Befehl, anschließend muss das Array neu aufgebaut und das neue Array der Sessionvariable „chart“ zugeordnet werden.

Um den ganzen Warenkorb zu löschen wird ein neues, leeres Array erzeugt und die alte Sessionvariable überschrieben.

Der Warenkorb wird bei Klick auf den „Bestellung bestätigen“ Button über einen SQL INSERT Befehl in die Tabelle Bestellungen gespeichert. Dabei werden je-doch nur Produkt ID, Tisch, Anzahl und ein Timestamp gespeichert.

Um die Rechnung auszugeben, wurde sich eines Scripts von Nils Reimers, Git Hub Repository https://github.com/PHP-Einfach/pdf-rechnung bedient. Dieses wurde an die Gegebenheiten angepasst und kann ein Rechung im .pdf Format sowohl im Browser direkt ausgeben, als auch als Datei speichern.

3.9 Design

Für die Grundlagen des Layouts wurde Bootstrap 3.7 verwendet. Dazu wurde zunächst der Header definiert und die 3 Spalten Optik mit Hilfe der CSS-Klassen .column .col-md-4 realisiert.

Daraufhin wurden die Spalten mit DIV Elementen versehen, in welche später per AJAX eine PHP Datei ausgegeben werden soll.

Auf der Seite der farblichen Gestaltung galten die Grüntöne des Hintergrunds als Richtwert. So wurden die Listenelemente und Buttons entsprechend angepasst.

Weiterhin wurde eine passende Schriftart namens „Bilbo Swash Caps“, die Teil des Google Fonts Portfolios ist, verwendet.

3.9.1 Responsive Design

Bootstrap bietet bereits im Standard Grundfunktionen, um die Webseite auf verschieden Endgeräten darstellen zu können. Jedoch bedarf es dazu einer strengen Nut-zung von Bootstrap, die nicht immer eingehalten wer-den kann. Dem entsprechend müssen in der style.css des Projekts Media Queries eingesetzt werden, um z.B. für mobile Endgeräte zu optimieren.

Zusammenfassung und Fazit

Das Projekt kann als erfolgreich und lehrsam zusammengefasst werden.

Die größte Herausforderung bestand darin, die Menge an Techniken in kurzer Zeit im Selbststudium zu erlernen. Dies haben wir, obwohl mit unterschiedlichen Vorkenntnissen gestartet, durch eine Arbeitsaufteilung in Kunden und Küchen-seite gelöst. Dabei haben wir jedoch nie die Kommunikation zwischen beiden Bereichen vernachlässigt, was bei Projekten solcher Art sehr wichtig ist. Durch die Aufteilung der großen Arbeitspakete in Teilaufgaben konnte eine gewisse Projektplanung implementiert werden und so der Fortschritt des Projektes be-schleunigt und die Erreichung des Ziels gewährleistet werden.

Die Zusammenarbeit sowohl im eigenem Team, als auch im Kurs war immanent für den Erfolg des Projekts. Den anderen Gruppen mit Lösungsvorschlägen zu helfen und von anderen Kommilitonen Denkanstöße zu bekommen, hat uns und den Kurs massiv weitergeholfen und motiviert.

In Zukunft kann das Projekt noch um zahlreiche Funktionen erweitert werden. Hier einige Ideen:

* Berechnung der Wartezeit für die Bestellung

* Automatisierte Tischvergabe und grafische Anzeige

* Ruftaste

* Empfehlungen, zB. für passende Weine zu den Speisen

* Rechnung per Mail verschicken

* Payment: PayPal Integration, weitere Zahlungsmittel

* Entertainmentfunktion(en) bis das Essen fertig ist

* Auswertung der Feedbacks

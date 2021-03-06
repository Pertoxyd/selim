<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_aufgabe_single_choice.tpl");

// Die Sprachdatei laden
$langs[] = "de/lang_main.php";
$lang = $tpl->loadLanguage($langs);

// Platzhalter ersetzen
// Title der Webseite
$tpl->assign( "website_title", "Fakteninformationssysteme" );
// Modultitel
// 1.: Für Desktop
// 2. Für Mobile Ansicht
$tpl->assign( "module_title", "SELiM - Fakteninformationssysteme" );
$tpl->assign( "module_mobile_title", "SELiM - FIS" );
// Überschrift der aktuellen Seite
$tpl->assign( "module_headline", "Aufgabe 15" );

/// Text
$tpl->assign( "text", "Welche der untenstehenden SELECT-Anweisungen liefert als Ergebnis 'Verkäufer'?<br/>Die 
zugehörigen Tabellen finden Sie im Tipp im Kopf der Seite" );

// Single Choice Optionen
// Pro Option muss ein Radiobutton nach folgendem Schema eingefügt werden:
$tpl->assign( "single_choice", "
    <label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe'/>
		<span><code>SELECT AuftragNr FROM Kunde WHERE Kunde.Nr = KundNr AND Name = 'Schreiner & Söhne';</code></span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe' />
		<span><code>SELECT KundNr FROM Auftrag WHERE Kunde.Nr = 3;</code></span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input class='solution' type='radio' name='aufgabe'	/>
		<span class='solution'><code>SELECT AuftragNr FROM Kunde, Auftrag WHERE Kunde.Nr = KundNr AND Name = 'Schreiner 
		& Söhne';</code></span>
	</label>
	<label type='text' class='btn btn-default btn-group btn-group-justified radioButton'>
		<input type='radio' name='aufgabe' />
		<span><code>SELECT Nr FROM Kunde, Auftrag WHERE Name = 'Schreiner & Söhne';</code></span>
	</label>
" );


// Aufgabennstellung
$tpl->assign( "beispiel", "Die Elefanten fanden die Kekse. Sie fraßen sie. 
Die Kinder fanden die Kekse. Sie aßen sie." );
$tpl->assign( "beispielVerstecken", "hidden" );


// Funktion zur Validierung
$tpl->assign( "ValidateFunction", "radioVal()" );

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "visible");
$tpl->assign( "iwisHeadline", "Tabelle für diese Aufgabe" );
$tpl->assign( "iwisTipp", "
<table class='table table-bordered table-responsive'>
<tr>
<th>Nr</th>
<th>Name</th>
<th>Ort</th>
</tr>
<tr>
<td>1</td>
<td>Erna Schneider</td>
<td>Fulda</td>
</tr><tr>
<td>2</td>
<td>Schreiner & Söhne</td>
<td>Hildesheim</td>
</tr><tr>
<td>3</td>
<td>B & B</td>
<td>Mainz</td>
</tr><tr>
<td>4</td>
<td>Johnson & Co</td>
<td>London</td>
</tr>
</table>
<table class='table table-bordered table-responsive'>
<tr>
<th>AuftragNr</th>
<th>Datum</th>
<th>PersNr</th>
<th>KundNr</th>
</tr>
<tr>
<td>1</td>
<td>11.05.2001</td>
<td>4</td>
<td>2</td>
</tr><tr>
<td>2</td>
<td>21.10.2003</td>
<td>4</td>
<td>2</td>
</tr><tr>
<td>3</td>
<td>19.05.2002</td>
<td>6</td>
<td>3</td>
</tr><tr>
<td>4</td>
<td>14.02.2002</td>
<td>6</td>
<td>1</td>
</tr>
</table>" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>
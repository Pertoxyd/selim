<?php
include("../../Template.class.php");
//include $_SERVER['DOCUMENT_ROOT']."/miniTemplateSystem/Template.class.php";

// Das Template laden
$tpl = new Template();
$tpl->load("content/tpl_text.tpl");

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
$tpl->assign( "module_headline", "Relationales Datenmodell" );

// Text
$tpl->assign( "text", "Zur Datenbankimplementierung muss das ERM in das Relationale Datenmodell (auch Relationenmodell) 
übergeleitet werden, welches Grundlage <strong>relationaler Datenbanken</strong> ist.<br/>
<img class='img-responsive center-block' src='../../images/fis/relationales-datenmodell.jpg' alt='Relationales Datenmodell'>
<p>Im Relationenmodell werden Entitäten, ihre Eigenschaften und ihre Beziehungen untereinander durch das Konzept der 
Relation dargestellt.</p><p>Dabei beschreibt jede Relation (=Tabelle) genau eine Entität des Datenbestandes.</p><p>
Relationen bestehen aus Tupeln (Zeilen oder Datensätze ) und Attributen (Spalten)</p>.");

// Iwis Tipp
// 1. sichtbar oder unsichtbar?
// 2. Überschrift (zum Beispiel Tipp oder Lösungsvorschlag)
// 3. Hinweis/Lösung
$tpl->assign("visibility", "invisible");
$tpl->assign( "iwisHeadline", "" );
$tpl->assign( "iwisTipp", "" );

include("inhalt.php");
include("../../functions/page_navigation.inc.php");
// Und die Seite anzeigen
$tpl->display();
?>
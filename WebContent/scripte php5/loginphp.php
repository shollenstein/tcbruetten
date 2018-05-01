<?php

// Zugangsdaten
include_once('pwd.inc.php');

// Bereichsbezeichnung
$bereich = "Mitgliederzone";

// Fehlermeldung
$abbruch_meldung = <<<FEHLER
Sie kommen hier nicht rein!<br />
<a href="http://www.lachenzelg.ch"> schaue!</a>
FEHLER;

if(!array_key_exists($_SERVER['PHP_AUTH_USER'], $nutzer) ||
$_SERVER['PHP_AUTH_PW']!= $nutzer[$_SERVER['PHP_AUTH_USER']]) {
	Header("HTTP/1.1 401 Unauthorized");
	Header("WWW-Authenticate: Basic realm=".$bereich);
	echo $abbruch_meldung;
	exit;
	}

?>


<?php
	/* DIESEN CODE AN OBERSTER STELLE BELASSEN */
	header('Content-Type: text/html; charset=utf-8'); /* WENN DU KEIN UTF-8 NUTZT, KANNST DU (NUR) DIESE ZEILE LÖSCHEN! */
	session_start();
?>

<!-- Hier kann der Inhalt deiner Seite vor das Kontaktformular platziert werden -->

<style type="text/css">
textarea {
	width:300px;height:200px ;
}
</style>

<?php
	/* http://www-coding.de/individuelles-kontaktformular-mit-captcha-in-php/ (MEHR INFORMATIONEN UND ANLEITUNG)
	 *
	 * [VERSION MIT CAPTCHA]
	 *
	 * Dieser 1. Teil kann angepasst werden, um die Formularfelder zu beeinflussen ($fields)
	 * Ausserdem solltest Du in $mailTo deine E-Mail-Adresse speichern
	 * $formTitle beinhaltet die Überschrift des Formulars
	 * In $msgInfo ist der Hinweistext gespeichert, der angezeigt werden soll
	 * $msgError wird angezeigt, wenn nicht alle Pflichtfelder ausgefüllt wurden
	 * $msgSent hingegen beinhaltet eine Erfolgsmeldung, wenn die Anfrage verschickt wurde
	 * Speichere in $captchaPath den Pfad von der aktuellen Datei aus zur captcha.php
	 */
	
	$mailTo = 'fueche@bluewin.ch';
	$mailFrom = 'info@tcbruetten.ch';
	
	$formTitle = 'Kontaktformular Präsident (Christian Fuchs)';
	$msgInfo = 'Um mich zu kontaktieren, füllen Sie bitte das folgende Formular aus. Mit * gekennzeichnete Felder sind Pflichtfelder.';
	$msgError = 'Es ist ein Fehler aufgetreten: Es wurden nicht alle Felder korrekt ausgefüllt.';
	$msgSent = 'Ihre Anfrage wurde erfolgreich verschickt.';
	$captchaPath = '/kontaktformular/captcha/captcha.php';
	
	$fields = array	(
						// 'Feldname'		=>		 Typ, Pflichtfeld?, Ergänzungen (z.B. bei select-Feld)
						'Anrede' 			=> array('select', true, array('Frau', 'Herr')),
						'Vorname' 			=> array('text', false),
						'Nachname'			=> array('text', true),
						'Strasse'			=> array('text', false),
						'PLZ und Stadt'		=> array('text', false),
						'Telefon'			=> array('text', false),
						//'Website'			=> array('text', false),
						'E-Mail-Adresse'	=> array('text', true),
						'Betreff' 			=> array('text', false),
						'Mitteilung' 		=> array('textarea', true),
					);
	
	/* Funktion um aus den Feldnamen eine URL-Form zu erstellen (AB HIER BITTE NUR NOCH EVENTUELLE TEXTE ANPASSEN) */
	function field2url($fieldname) {
		return "f_".preg_replace('/([^a-z0-9-_]+)/', '', strtolower($fieldname));
	}
	
	/* Ausgabe des Formulars  */
	if (isset($_POST['send']) && isset($_POST['captcha_code']) && isset($_POST['email'])) {
		// 2. Eingaben prüfen //
		$mailSubject = 'Nachricht über tcbruetten.ch';
		$mailSubject = "=?utf-8?b?".base64_encode($mailSubject)."?=";
		$mailText = "Du hast eine Nachricht über das Kontaktformular von www.tcbruetten.ch erhalten.\r\n\r\n";
		// $mailHeader = "From: kontaktformular@".$_SERVER['HTTP_HOST']."\r\n"."Content-type: text/plain; charset=utf-8"."\r\n";
		$mailReplyTo = $_POST[field2url("E-Mail-Adresse")];
		$mailHeader = "From: " . $mailFrom . "\r\n" .
						"Reply-To: " . $mailReplyTo . "\r\n" .
						"X-Mailer: PHP/" . phpversion() . "\r\n" .
						"Content-type: text/plain; charset=utf-8";
		
		// Einzelne Felder auslesen //
		foreach ($fields AS $name => $settings) {
			if ( !( !$settings[1] || ( $settings[1] && isset($_POST[field2url($name)]) && $_POST[field2url($name)] != '' ) ) ) {
				// Pflichtfeld nicht ausgefüllt => Abbruch //
				$sent = false;
				break;
			} else if ($_POST[field2url($name)] != '') {
				// Inhalt (wenn nicht leer) in die E-Mail schreiben //
				$mailText .= $name.": ".$_POST[field2url($name)]."\r\n";
			}
		}
		
		// Kurzer Spam-Check inkl. Captcha-Check //
		if ($_POST['captcha_code'] != $_SESSION['captcha_spam'] || $_POST['email'] != '') {
			// Bot => Abbruch //
			$sent = false;
		}
		
		if (!isset($sent)) {
			// Nach erfolgreicher Überprüfung E-Mail verschicken //			
			mail($mailTo, $mailSubject, $mailText, $mailHeader);
			
			echo "<h1>".$formTitle."</h1>" .
					"<p>".$msgSent."</p>";
			
			$sent = true;
		}
	} else
		$sent = false;

	if (!$sent) {
		// 3. Formular ausgeben (Beginn des Formulars) //
		echo "<h1>".$formTitle."</h1>" .
				"<p>".$msgInfo."</p>" .
				((isset($_POST['send'])) ? $msgError : '') .
				"<form action=\"?".$_SERVER['QUERY_STRING']."\" method=\"POST\">" .
					'<table>';
				
		// Felder auslesen //
		foreach ($fields AS $name => $settings) {
			// Ausgabe je nach Typ //
			switch ($settings[0]) {
				case 'select':
					// Select-Feld //
					echo "<tr><td>".$name.":".(($settings[1]) ? ' (*)' : '')."</td><td><select name=\"".field2url($name)."\">";
					
					// Select-Felder auslesen //
					foreach ($settings[2] AS $f) {
						echo "<option".((isset($_POST[field2url($name)]) && $_POST[field2url($name)] == $f) ? ' selected' : '').">".$f."</option>";
					}
					
					// Ende des Select-Feldes //
					echo '</select></td></tr>';
				break;
				
				case 'text':
					// Einfaches Text-Feld //
					echo "<tr><td>".$name.":".(($settings[1]) ? ' (*)' : '')."</td><td><input type=\"text\" name=\"".field2url($name)."\" value=\"".((isset($_POST[field2url($name)])) ? htmlspecialchars($_POST[field2url($name)]) : '')."\" /></td></tr>";
				break;
				
				case 'textarea':
					// Mehrzeiliges Textfeld //
					echo "<tr><td>".$name.":".(($settings[1]) ? ' (*)' : '')."</td><td><textarea name=\"".field2url($name)."\">".((isset($_POST[field2url($name)])) ? htmlspecialchars($_POST[field2url($name)]) : '')."</textarea></td></tr>";
				break;
			}
		}
		
		// Formular-Ausgabe abschliessen und Captcha einbinden //
		echo			"<tr><td>Spam-Schutz: (*)</td><td><img src=\"".$captchaPath."\" alt=\"Captcha\" width=140 height=40 /><br /><input type=\"text\" name=\"captcha_code\" size=9 maxlength=5 /></td></tr>" .
					'</table>' .
					'<input type="text" name="email" style="display:none;" />' .
					'<input type="hidden" name="send" value=1 />' .
					'<input type="submit" value="Formular abschicken" />'.
				'</form>';
	}
	
	
?>

<!-- Hier kann der Inhalt deiner Seite hinter das Kontaktformular platziert werden -->

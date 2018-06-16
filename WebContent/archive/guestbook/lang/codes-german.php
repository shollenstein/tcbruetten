<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title><?php
$_GET['show'] = htmlspecialchars($_GET['show']);
echo($_GET['show']);
?></title>
<meta content="text/html; charset=windows-1252" http-equiv="Content-Type">
<style type="text/css">
<!--
td { font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 8pt }
-->
</style>
</head>
<body bgcolor="#FFFFFF" link="#000080" text="#000000" vlink="#000080">
<script language="javascript" type="text/javascript">
<!--
function emoticon(text) {
	text = ' ' + text + ' ';
	if (opener.document.forms['book'].gb_comment.createTextRange && opener.document.forms['book'].gb_comment.caretPos) {
		var caretPos = opener.document.forms['book'].gb_comment.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
		opener.document.forms['book'].gb_comment.focus();
	} else {
	opener.document.forms['book'].gb_comment.value  += text;
	opener.document.forms['book'].gb_comment.focus();
	}
}
-->
</script>
<center>
<?php if($_GET['show'] == 'smilies')
{
?>
  <table width="95%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="25"> W A S&nbsp;&nbsp;&nbsp;S I N D&nbsp;&nbsp;&nbsp;S M I L I E S ?</td>
    </tr>
    <tr>
      <td>
        <p>'Smilies',oder emoticons, sind kleine Grafiken, die dazu genutzt werden k&ouml;nnen, um ein Gef&uuml;hl oder eine Stimmung zu vermitteln.  Wenn Sie E-Mail, IRC oder das Usenet bereits genutzt haben, werden Sie Ihnen sicher schon begegnet sein. Bestimmte Zeichenfolgen werden automatisch in Smilies umgewandelt. Wenn Sie ein Smily nicht sofort verstehen, versuchen Sie, ihren Kopf zur Seite zu neigen und nutzen Sie Ihre Vorstellungskraft.</p>
        <p> Diese Smilies werden zur Zeit akzeptiert:</p>
      </td>
    </tr>
  </table>
  <table bgcolor=#f7f7f7 border="0" width="95%" cellspacing="1" cellpadding="4">
    <tbody>
    <tr>
      <td bgcolor="#996699"><font color="#FFFFFF"><b>Welche Zeichen sind zu tippen</b></font></td>
      <td bgcolor="#996699"><font color="#FFFFFF"><b>Grafik die erscheint</b></font></td>
      <td bgcolor="#996699"><font color="#FFFFFF"><b>Emotion</b></font></td>
    </tr>

<?php include ("./smilies.inc"); ?>

    </tbody>
  </table>
<?php
}
elseif ($_GET['show'] == 'agcode')
{
?>
  <table width="95%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="25">W A S&nbsp;&nbsp;&nbsp;I S T&nbsp;&nbsp;&nbsp;A D V A N D C E D&nbsp;&nbsp;&nbsp;G U E S T B O O K&nbsp;&nbsp;&nbsp;C O D E ?</td>
    </tr>
    <tr>
      <td>
        <p>AGCode ist eine Ab&auml;nderung der HTML-Tags, die Sie vielleicht schon kennen. Sie erlauben Ihnen, Ihre Nachricht mit Formatierungen zu versehen, die normalerweise HTML ben&ouml;tigen w&uuml;rden. AGCode funktioniert auch dann, wenn HTML f&uuml;r das G&auml;stebuch deaktiviert wurde. Selbst wenn HTML erlaubt ist, ist AGP einfacher zu handhaben und weniger fehleranf&auml;llig.
        <p>&Uuml;bersicht &uuml;ber die AGCodes:
      </td>
    </tr>
  </table>
<table border="0" cellpadding="0" cellspacing="0" width="95%" align="center">
  <tbody>
  <tr>
    <td bgcolor="#000000">
      <table border="0" cellpadding="4" cellspacing="1" width="100%">
        <tbody>
        <tr bgcolor="#0099CC">
          <td><b><font color="#FFFFFF">URL Hyperlinking</font></b></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td>Wenn AGCode aktiviert ist, m&uuml;ssen Sie nicht mehr [URL] nutzen, um einen Hyperlink zu erzeugen. Einfach die komplette URL auf eine der folgenden Arten tippen, und die Umwandlung in einen Link erfolgt automatisch:
            <ul>
              <li><font color="#800000">http://www.yourURL.com</font>
              <li><font color="#800000">www.yourURL.com</font>
              	<br>&quot;http://&quot; kann also auch weggelassen werden. Wenn die Domain allerdings nicht mit &quot;www&quot; beginnt, m&uuml;ssen Sie &quot;http://&quot; mit angeben. Ebenfalls g&uuml;ltig sind &quot;ftp&quot; und &quot;https&quot;-Links.
              	<br><br>
              <li>Au&szlig;erdem ist es m&ouml;glich, &quot;echte&quot; Links zu erstellen, indem Sie den [url]-Code nutzen (AGCode ist in <font color="#FF0000">rot</font>):
              	<br><br>
                <center>
                  <font color="#FF0000">[url=http://www.proxy2.de]</font>hyperlink<font color="#FF0000">[/url]</font>
                </center><br><br>
              <li>
                <p>Der urspr&uuml;ngliche [URL]-Code funktioniert nat&uuml;rlich nach wie vor (AGCode ist in <font color="#FF0000">rot</font>).
                <p>
                  <center>
                    <font color="#FF0000">[url]</font>http://www.proxy2.de<font color="#FF0000">[/url]</font>
                  </center>
                <p>In allen Beispielen erstellt der AGCode automatisch einen Link zu der betreffenden URL. Au&szlig;erdem wird der Link immer in einem neuen Fenster ge&ouml;ffnet. Im zweiten Beispiel f&uuml;hrt der Link hinter dem Text zu der URL, die Sie hinter dem &quot;=&quot;-Zeichen spezifizieren. Beachten Sie bitte, dass sie innerhalb des [URL]-Tag keine Anf&uuml;hrungszeichen (&quot;) verwenden sollten.</p>
              </li>
            </ul>
          </td>
        <tr bgcolor="#0099CC">
          <td><b><font color="#FFFFFF">Email Links</font></b></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td>Um eine verlinkte E-Mail-Adresse in Ihrem Text zu erhalten, benutzen Sie bitte folgenden Code (AGCode ist in <font color="#FF0000">rot</font>).
            <p>
              <center>
                <font color="#FF0000">[email]</font>webmaster@proxy2.de<font color="#FF0000">[/email]</font>
              </center>
            <p>In diesem Beispiel generiert der AGCode automatisch einen Link zu der eingeschlossenen E-Mail-Adresse.</p>
          </td>
        </tr>
        <tr bgcolor="#0099CC">
          <td><b><font color="#FFFFFF">Fett und kursiv</font></b></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td>Um kursiven oder Fetten Text zu erhalten, benutzen Sie die [b] [/b]- oder [i] [/i]-Tags.
            <p>
              <center>
                Hello, <font color="#FF0000">[b]</font><b>John</b><font color="#FF0000">[/b]</font><br><br>
                Hello, <font color="#FF0000">[i]</font><i>Maria</i><font color="#FF0000">[i]</font>
              </center>
          </td>
        </tr>
        <tr bgcolor="#0099CC">
          <td><b><font color="#FFFFFF">Bilder hinzuf&uuml;gen</font></b></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td>Um ihrer Nachricht ein Bild hinzuzuf&uuml;gen (AGCode ist in <font color="#FF0000">rot</font>):
            <p>
              <center>
                <font color="#FF0000">[img]</font>http://www.yourURL.com/image/logo.gif<font color="#FF0000">[/img]</font>
              </center>
            <p>In diesem Beispiel macht der AGCode Ihre Grafik automatisch in der Nachtricht sichtbar. Achtung: Der &quot;http://&quot;- Teil der URL ist in diesem Fall notwendig!</p>
          </td>
        </tr>
        <tr bgcolor="#0099CC">
          <td><b><font color="#FFFFFF">Flash hinzuf&uuml;gen</font></b></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td>Um Flash in den Nachrichten zu verwenden schlie&szlig;en Sie einfach die URL der Flash-Datei wie folgt ein (AGCode ist in <font color="#FF0000">rot</font>).
            <p>
              <center>
                <font color="#FF0000">[flash]</font>http://www.yourURL.com/image/funny.swf<font color="#FF0000">[/flash]</font><br>
                <font color="#FF0000">[flash]</font>http://www.youtube.com/watch?v=pz0XNGJ-ep8<font color="#FF0000">[/flash]</font>
              </center>
            <p>In diesem Beispiel macht der AGCode Ihre Flash-Datei automatisch in der Nachtricht sichtbar. Achtung: Der &quot;http://&quot;- Teil der URL ist in diesem Fall notwendig!</p>
          </td>
        </tr>
        </tbody>
      </table>
    </td>
  </tr>
  </tbody>
</table>
<table width="95%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td><font color="#800000">Weitere Hinweise</font><br>
      Benutzen Sie nicht gleichzeitig HTML und AGCode f&uuml;r die gleiche Funktion. AGCode ist nicht case-sensitive (es ist also egal, ob Sie <font color="#FF0000">[URL]</font> oder <font color="#FF0000">[url]</font>) tippen.
      <br><br>
      <font color="#800000">Falscher AGCode-Code:</font> <br>
      <font color="#FF0000">[url]</font> www.proxy2.de <font color="#FF0000">[/url]</font> - keine Leerzeichen zwischen dem Code in eckigen Klammern und dem Text, auf die der Code angewendet wird.<br>
      <br>
      <font color="#FF0000">[email]</font>webmaster@proxy2.de<font color="#FF0000">[email]</font> - der code am Ende muss ein &quot;/&quot; enthalten (<font color="#FF0000">[/email]</font>)
    </td>
  </tr>
</table>
<?php
 }
 else
 {
 echo ("Nothing requested");
 }
 ?>
</center>
<br>
</body>
</html>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "rufan"
&& $pass == "filzli")
{
	include("protected/bi5HeR02ylS68oQm.html");
}
else
{
	if(isset($_POST))
	{?>

		<div style="position: relative; margin: 50px auto; padding: 20px; width: 300px; background:#ebe8de">
			<div style="position: relative">
				<h4>Login zur internen Mitgliederliste</h4>
				<?php if(isset($user) && isset($pass))
				{
					sleep(2)
				?>
					<span style="color: red">Falscher Benutzername oder Passwort</span>
				<?php } ?>
				<form method="POST" action="mitglieder.php">
					<table style="width: 100%">
						<tr>
							<td>Benutzername: </td>
							<td><input type="text" name="user" style="width: 100%"></input></td>
						</tr>
						<tr>
							<td>Passwort: </td>
							<td><input type="password" name="pass" style="width: 100%"></input></td>
						</tr>
					</table>
					<input type="submit" name="submit" value="Login" style="width: 70px; right: 0px; position: absolute"></input>
				</form>
			</div>
		</div>
	<?php }
}
?>

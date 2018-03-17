<?php
if (isset($_GET['setup'])) {
echo '<form action="setup.php" style="text-align: center; margin: auto; width: 450px; margin-top:10%;" method="post">
	<a href="index.php">Home</a><br/><br/>
	Consumer key :<br/><input type="text" name="key" style="width: 250px" required><br/><br/>
	Consumer Secret :<br/><input type="text" name="key_secret" style="width: 250px" required><br/><br/>
	Access Token :<br/><input type="text" name="token" style="width: 250px" required><br/><br/>
	Access Token Secret :<br/><input type="text" name="token_secret" style="width: 250px" required><br/><br/>
	Twitter ScreenName (@ScreenName) :<br/><input type="text" name="screen_name" style="width: 250px" required><br/><br/>
	<button type="submit">Setup UnRT !</button>
</form>';
	die();
}

require "config.php";
include "unrt.php";

?>

<form action="clear.php" method="post" style="text-align: center; margin: auto; width: 450px; margin-top: 20%;">
	<a href="index.php?setup">Setup</a><br/><br/>
	<button type="submit">Clear all my RTs</button>
</form>
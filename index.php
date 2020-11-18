<?php
session_start();
	echo"
	<form action='feldolgozas.php' method='POST' target='megjelenito'>
		<input type='textbox' name='url' placeholder='ulr-t kérem'>
		<input type='submit'>
	</form>
	
	<iframe name='megjelenito' width= 100% height= 100%></iframe>
	";


?>
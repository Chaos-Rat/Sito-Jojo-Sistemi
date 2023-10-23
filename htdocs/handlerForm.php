<?php
	http_response_code(200);
	header("Content-Type: text/html");
	echo "Richiesta POST ricevuta! Dati ricevuti: nome = '" . $_POST["name"] . "', email = '" . $_POST["email"] . "'.";
?>
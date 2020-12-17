<?php

	session_start();
	if(isset($_SESSION["message"])){
		$message=$_SESSION["message"];
		unset($_SESSION["message"]);
	}
	else{
		$message=null;
	}

?>
<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<link href="../public/css/style.css" rel="stylesheet" type="text/css">
		<title>Puissance 4</title>
    </head>
    <body>
		<div class="form-style-5">
			<form action="../controleurs/enligne.php" method="POST">
				<fieldset>
					<legend>Jouer en ligne (2 joueurs)</legend>
					<legend>
						<?php
							if(!is_null($message)){
								echo $message;
							}
						?>
					</legend>
                    <input type="text" name="nomj1" placeholder="Nom du joueur">
                    
                    <label>Invitez un joueur :</label>
                    <input type="email" name="invit_mail" placeholder="Insérez l'email du joueur">
					 
					<input type="hidden" name="action" value="Commencer">
					<input type="submit" value="Commencer">
				</fieldset>
			</form>
		</div>
    </body>
</html>
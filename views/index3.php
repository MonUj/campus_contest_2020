<?php

	session_start();
	if(isset($_SESSION["message"])){
		$message=$_SESSION["message"];
		unset($_SESSION["message"]);
	}
	else{
		$message=null;
	}

	require'header.php'; 
?>
<!DOCTYPE html 
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    
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
			<a href="../"><button style="border: 2px solid #666; margin:10px 5px;" >Retour à l'accueil</button></a>
		</div>
    </body>
</html>

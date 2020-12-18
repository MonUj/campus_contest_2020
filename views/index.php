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

    <body>
		<div class="form-style-5">
			<form action="../controleurs/enlocal.php" method="POST">
				<fieldset>
					<legend>Jouer en local</legend>
					<legend>
						<?php
							if(!is_null($message)){
								echo $message;
							}
						?>
					</legend>
					<input type="text" name="nomj1" placeholder="Nom du joueur 1">
					<input type="text" name="nomj2" placeholder="Nom du joueur 2">
					<input type="hidden" name="action" value="Commencer">
					<input type="submit" value="Commencer">

				</fieldset>
			</form>
			<a href="../"><button style="border: 2px solid #666; margin:10px 5px;" >Retour à l'accueil</button></a>
		</div>
    </body>
</html>

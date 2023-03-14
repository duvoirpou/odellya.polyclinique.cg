<?php
	// Si le formulaire a été soumis
	if(isset($_POST["services"])){
		
		$message = "Ce message vous a ete envoye via le formulaire de Contact du site POLYCLINIQUE DE LA RAFFINERIE polyclinique-raffinerie.cg
		Nom : " . $_POST["name"] . "
		Telephone : " . $_POST["phone"] . "
		Email : " . $_POST["email"] . "
		services : " . $_POST["message"];
		
		$retour = mail("contact@polyclinique-raffinerie.cg", $_POST["services"], $message, "From:contact@polyclinique-raffinerie.cg" . "\r\n" . "Reply-to:" . $_POST["email"]);
		
		if($retour){
			echo "<p>Votre message a bien été envoyé. Merci !</p>";
			header('Location: index.html');
						
		}
	}
			
?>
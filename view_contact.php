<?php
require_once 'inc/connect.php';

$produit = [];
// view_menu.php?id=6
if(isset($_GET['id']) && !empty($_GET['id'])){

	$idContact = (int) $_GET['id'];

	$selectOne = $bdd->prepare('SELECT * FROM contacts WHERE id = :idContact');
	$selectOne->bindValue(':idContact', $idContact, PDO::PARAM_INT);

	if($selectOne->execute()){
		$contact = $selectOne->fetch(PDO::FETCH_ASSOC);
         //var_dump($produit);
	}
    //var_dump($produit);
	else {
		// Erreur de développement
		var_dump($query->errorInfo());
		die; // alias de exit(); => die('Hello world');
	}
}


?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Détail du contact</title>

	<!-- Pour Internet Explorer : S'assurer qu'il utilise la dernière version du moteur de rendu -->    
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    
    <!-- Affichage sans zoom pour les mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Styles CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <!-- HTML5 Shiv -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js" integrity="sha256-sqQlcOZwgKkBRRn5WvShSsuopOdq9c3U+StqgPiFhHQ=" crossorigin="anonymous"></script>
</head>
<body>
	<section class="view_contact">
		<div class="container">
			<div class="row col-md-12">
				<?php if(!empty($contact)): ?>
					<h1>Détail du contact</h1>

					<h2>Nom et Prénom :<?php echo $contact['name'];?></h2>
					
					<p><strong>Email pret à répondre:</strong><a href="mailto:<?=$contact['email'];?>?subject=Demande <?=$contact['type']; ?> de <?=$contact['name']; ?> code postal <?=$contact['zipcode']; ?> Telephone <?=$contact['phone']; ?>&body=Votre demande: <?=$contact['object']; ?>"> <?=$contact['email']; ?></a></p>
					<p><strong>Téléphone:</strong><?php echo nl2br($contact['phone']); ?></p>
					<p><strong>Code postal :</strong><?php echo nl2br($contact['zipcode']); ?></p>
					<p><strong>Type de question:</strong><?php echo nl2br($contact['type']); ?></p>
					<p><strong>Message :</strong><br><?php echo nl2br($contact['object']); ?></p>
					<br><br><br>
				    <a href="list_contacts.php">Retour</a>

				<?php else: ?>

					Aucune contact trouvé !
				<?php endif; ?>
			</div>
		</div>
	</section>
</body>
</html>
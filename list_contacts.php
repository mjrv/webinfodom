<?php

require_once 'inc/connect.php';

// On selectionne l ensemble des elements du contact
// 

$select = $bdd->prepare('SELECT * FROM contacts ORDER BY id DESC');
	if($select->execute()){

		$contacts = $select->fetchALL(PDO::FETCH_ASSOC);
	}else{
		echo 'toto';
		die;
	}
	?><!DOCTYPE html>
	<html lang="fr">
	<head>

    <!-- Encodage pour les accents -->
    <meta charset="UTF-8">
    
    <!-- Titre de la Page -->
    <title>WebInfoDom</title>
    
    <!-- Pour Internet Explorer : S'assurer qu'il utilise la dernière version du moteur de rendu -->    
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <meta http-equiv="refresh" content="60">
    
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
		<section id="contacts">
		<h1>LISTE DES CONTACTS</h1> <br>
			<div class="container">
			    <div class="row col-md-12">
				    <table class="table table-striped custab">
						<thead>
							<tr>
								<th>#</th>
								<th>Nom</th>
								<th>email</th>
								<th>telephone</th>
								<th>code postal</th>
								<th>choix intervention</th>
								<th>message</th>
								<th>visualiser</th>
							</tr>
						</thead>

						<tbody>
							<!-- foreach permettant d'avoir une ligne <tr> par ligne SQL -->
							<?php foreach($contacts as $contact):?>
								<tr>
									<td><?=$contact['id']; ?></td>
									<td><?=$contact['name']; ?></td>
									<td> <a href="mailto:<?=$contact['email'];?>?subject=Demande <?=$contact['type']; ?> de <?=$contact['name']; ?> code postal <?=$contact['zipcode']; ?> Telephone <?=$contact['phone']; ?>&body=Votre demande: <?=$contact['object']; ?>"> <?=$contact['email']; ?></a></td>
									<td><?=$contact['phone']; ?></td>
									<td><?=$contact['zipcode']; ?></td>
									<td><?=$contact['type']; ?></td>
									<td><?=$contact['object']; ?></td>
									<td>
						<!-- view_menu.php?id=6 -->
						<a href="view_contact.php?id=<?=$contact['id']; ?>">
							Visualiser
						</a>
					</td
								</tr>
							<?php endforeach; ?>
						</tbody>

					</table>
			    </div>
			</div>
		</section>
	</body>
	</html>



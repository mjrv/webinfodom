<?php

require_once 'inc/connect.php';
$errors = [];//Declaration d'un tableau qui recupere les erreurs
$post = [];//Declaration d'un tableau qui recupere les elements du submit nettoyés
// Ecoute a quel moment est soumis le formulaire (suppert global $_POST)
$displayForm = true;
if(!empty($_POST)){
    foreach($_POST as $key => $value){// A la soumission on parcour le tableau
        $post[$key] = trim(strip_tags($value));// recuperation des valeurs sous forme de string sans les espaces et les commentaires php et html
    }
   
    // verification du contenu de nom
    if(strlen($post['name']) < 2){
        $errors[] = 'merci de mettre votre nom svp';
    }
    
    // verification du contenu de email et le format
    if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = 'L\' adresse email doit etre corrigée';
    }
    
    // verification du numero de telephone
    if(!is_numeric($post['phone']) || strlen($post['phone']) != 10){
        $errors[] = 'le numero de telephone doit avoir 10 caracteres';
    }
    
    // verification du code postal
    if(!is_numeric($post['zipcode']) || strlen($post['zipcode']) != 5){
        $errors[] = 'Le champ Code Postal doit avoir 5 chiffres';
    }
    
      // verification du type d intervention
    if(empty($post['type'])){
        $errors[] = 'merci de selectionner votre sujet ';
    }

      // verification sujet object
    if(strlen($post['object']) < 1){
        $errors[] = 'merci de mettre votre message';
    }
     // var_dump($post);
     // var_dump($errors);

    if(count($errors) === 0){
        // var_dump($errors);
        // echo 'toto';
        // var_dump($post);

        if(isset($post['selected'])){
            $isSelected = 1;
        }
        else {
            $isSelected = 0;    
        }
        //preparation d'envoi vers la base de donnee
        $query = $bdd->prepare('INSERT INTO contacts (name, email, phone, zipcode, type, object) VALUES (:name, :email, :phone, :zipcode, :type, :object)');
        //Insertion des donnee
        $query->bindValue(':name', $post['name']);
        $query->bindValue(':email', $post['email']);
        $query->bindValue(':phone', $post['phone']);
        $query->bindValue(':zipcode', $post['zipcode']);
        $query->bindValue(':type', $post['type']);
        $query->bindValue(':object', $post['object']);

        if($query->execute()){
            $success = 'Votre demande a bien été envoyer Merci <br> vous serez contacter dans les 24 heures maxi ';
            $displayForm = false;
        }
        else {
            // Erreur de développement
            echo'erreurs ';
            // die; // alias de exit(); => die('Hello world');
        }


        // $query->execute();
    }else{
        // var_dump($errors);
         $errorsText = implode('<br>',$errors);
                // echo'<strong>Erreurs :</strong>';
                // echo $errorsText;
    }

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
    
    <!-- Contenu HTML -->    
    <main class="container-full">
    	<div class="row r-m">   
    			            
            <!---------------------------------------------------
                            LA NAVIGATION
            ---------------------------------------------------->
          	<header class="col-xs-12">
          		<div class="row r-m"> 
	                <nav class="col-xs-12">
		                <ul class="">
		                    <li><a href="index.php">ACCUEIL</a></li>
                            <li><a href="prestaInfo.php">PRESTATIONS INFORMATIQUE</a></li>
                            <li><a href="prestaWeb.php">PRESTATIONS WEB</a></li>
                            <!-- <li><a href="contact.php">Nous contacter</a></li> -->
		                </ul>
		            </nav>
           		</div>
        	</header>

            
    <?php if(isset($errorsText)): ?>
        <p style="color:red; text-align: center;"><?php echo $errorsText; ?></p>
    <?php endif; ?>
    <?php if(isset($success)): ?>
        <p style="color:#2475dc; text-align: center; font-size: 30px"><?php echo $success; ?></p>
    <?php endif; ?>
    <?php if($displayForm === true): ?>
    
    

    
        
        <!---------------------------------------------------
                    Formulaire de contact
        ---------------------------------------------------->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <h3>Contact</h3>
                    <div class="col-sm-8 col-sm-push-2 col-xs-10 col-xs-push-1">
                        <form id="contact-form" class="form-horizontal" 
                            action="contact.php" method="post" enctype="multipart/form-data">
                            
                            <!-- Nom et Prénom -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="name" required class="form-control" type="text" placeholder="Votre Nom et Prénom">
                                </div>
                            </div>

                            <!-- email -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="email" required class="form-control" type="text" placeholder="Votre email">
                                </div>
                            </div>
                            
                            <!-- phone -->
                            <div class="form-group">
                                
                                <div class="col-xs-12">
                                    <input name="phone" required class="form-control" type="text" placeholder="Votre numero de téléphone">
                                </div>
                            </div> 
                            <!-- zipcode -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="zipcode" required type="text" placeholder="Votre code postal" class="form-control">
                                </div>
                                
                            </div> 
                           
                            
                            <!-- Sujet -->

                           <!-- <div class="form-group">
                                <div class="col-xs-12">
                                    <input name="sujet" required class="form-control" type="text" placeholder="Saisissez votre Sujet">
                                </div>
                            </div> -->


                            <div class="form-group">
                                <div class="col-xs-12">
                                    <select class="form-control" name="type">
                                        <option selected value= " ">Sélectionner votre sujet</option>
                                        <option value=informatique>Prestations Informatique ?</option>
                                        <option value=web>Prestations Web ?</option>
                                        <option value=web_et_Informatique>Prestations Informatique et Web ?</option>
                                        <option value=autre>Autres prestations ?</option>
                                    </select>
                                </div>
                            </div>
                                 
      
                            
                            <!-- Message -->
                            <div class="form-group">
                              <div class="col-xs-12">
                                  <textarea type="text" name="object" rows="5" required placeholder="Message" class="form-control"></textarea>           
                              </div>
                            </div>
                            
                            <!-- Bouton d'Envoi -->
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-primary">Envoyer ma demande</button>
                                </div>
                            </div>
                            
                        </form>    
                    </div>
                </div>
            </div>
        </section>
<?php endif; ?>

		<!---------------------------------------------------
                    PIED DE PAGE
        ---------------------------------------------------->
			<footer class="col-xs-12"> 
                <div class="adresse">
                    <h4> <span> W.I.D</span></h4>
                    <h4> SASU au capital de 2 000 euros</h4> 
                    <h4> RCS : 832 288 898</h4>
                    <h4> Siège social : 452, chemin Charbonnier – 97224 DUCOS</h4>
                    <h4> <span>Email : <a href="mailto:hjurin@webinfodom.com"> hjurin@webinfodom.com</a><br>
                    Téléphone : 06 96 73 22 72</span></h4>
                </div>
				<p>&copy; 2017 - Réalisation WebInfoDom Martinique !</p> 
            </footer>
    	
    	</div>
    <!-- <script src="assets/JS/test.js"></script> -->
    </main>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    
</body>
</html>

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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Webinfodom</title>

	<!-- Styles CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

	 <!-- Pour Internet Explorer : S'assurer qu'il utilise la dernière version du moteur de rendu -->    
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    
    <!-- Affichage sans zoom pour les mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- google font pour les polices des textes 
    font-family: 'Calligraffitti', cursive;
    font-family: 'Mr Dafoe', cursive;
    -->
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Mr+Dafoe" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia|Calligraffitti|Mr+Dafoe" rel="stylesheet">

	

	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>	

	 <!-- HTML5 Shiv -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js" integrity="sha256-sqQlcOZwgKkBRRn5WvShSsuopOdq9c3U+StqgPiFhHQ=" crossorigin="anonymous"></script>

    <!--font awesome pour les icons  -->
    <script src="https://use.fontawesome.com/924a5807fe.js"></script>
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script> -->
    
</head>
<body>
    
    <!-- Contenu HTML -->    
     
                            
            <!---------------------------------------------------
                            LA NAVIGATION
            ---------------------------------------------------->
          
        <div class="container">
            <div class="row">
                <div class="col r-m r-p">
                <nav class="navbar navbar-expand-md sticky-top">

                        <a class="navbar-brand text-white" href="index.php"><img src="assets\img\logoemail.jpg" alt="logo WebInfoDom"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span><i class="fa fa-bars text-black" aria-hidden="true"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbars">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">ACCUEIL</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="prestaInfo.php">PRESTATIONS INFORMATIQUE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="prestaWeb.php">PRESTATIONS WEB</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link blink_me btn btn-primary" href="contact.php">NOUS CONTACTER</a>
                                </li> -->
                            </ul>
                      </div>
                </nav>
                </div>
            </div>
        </div>
          
        <main>
         
       
        <!---------------------------------------------------
                    Formulaire de contact
        ---------------------------------------------------->
        <section id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 center-block">
                        <br><br><h3 class="text-center">Contact</h3>
        <div class="container">
            <div class="row">
                <?php if(isset($errorsText)): ?>
                    <p style="color:red; text-align: center;"><?php echo $errorsText; ?></p>
                <?php endif; ?>
                <?php if(isset($success)): ?>
                    <p style="color:#2475dc; text-align: center; font-size: 30px"><?php echo $success; ?></p>
                <?php endif; ?>
                <?php if($displayForm === true): ?>

            </div>
        </div>
            <form id="contact-form" class="form-horizontal" 
                            action="contact.php" method="post" enctype="multipart/form-data">

                            <!-- Nom et Prénom -->
                <div class="form-group">
                                <!-- <label for="name">Nom et Prénom</label> -->
                                <input name="name" required class="form-control" type="text" placeholder="Votre Nom et Prénom">
                                <small id="NameHelp" class="form-text text-muted">Minimum 2 caracteres</small>
                </div>

                            <!-- email -->
                <div class="form-group">
                                <!-- <label for="email">Email address</label> -->
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">Il faut un @ et un .fr ou autre</small>
                </div>

                            <!-- phone -->
                <div class="form-group">
                                <!-- <label for="phone">Téléphone</label> -->
                                <input name="phone" required class="form-control" type="text" placeholder="Votre numéro de téléphone">
                                <small id="phoneHelp" class="form-text text-muted">Doit contenir 10 chiffres</small>
                </div>
                            
                             <!-- zipcode -->
                <div class="form-group">
                                <!-- <label for="zipcode">Téléphone</label> -->
                                <input name="zipcode" required class="form-control" type="text" placeholder="Votre code postale">
                                <small id="zipcodeHelp" class="form-text text-muted">Doit contenir 5 chiffres</small>
                </div>

                            <!-- Sujet -->
                <div class="form-group">
                                <!-- <label for="exampleSelect1">Example select</label> -->
                    <select class="form-control" name="type" id="select">
                        <option selected value= " ">Sélectionner votre sujet</option>
                        <option value=informatique>Prestations Informatique ?</option>
                        <option value=web>Prestations Web ?</option>
                                    <option value=web_et_Informatique>Prestations Informatique et Web ?</option>
                        <option value=autre>Autres prestations ?</option>
                    </select>
                    <small id="zipcodeHelp" class="form-text text-muted">Merci de faire un choix</small>
                </div>

                            <!-- Message -->
                <div class="form-group">
                                <!-- <label for="object">Votre message</label> -->
                    <textarea type="text" name="object" rows="3" required placeholder="Message" class="form-control"></textarea>
                    <small id="objectHelp" class="form-text text-muted">Merci de mettre votre message</small>
                </div>
                              
                             <!-- Bouton d'Envoi --> 
                <div class="form-group">            
                    <button type="submit" class="btn btn-primary">Envoyer votre demande</button>
                </div>
                                            
            </form>    
                    </div>
                </div>
            </div>
        </section>
            <?php endif; ?>
         
      
    <!-- <script src="assets/JS/test.js"></script> -->
    </main>
       <!-- Footer Links -->
       <footer class="footer">
        <div class="container pt-5 pb-2">
            <div class="row">

                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h4>WEBINFODOM</h4>
                    <hr class="bg-white">
                    <p>
                        Spécialisée, dans le service après-vente, l'installation, la maintenance et le dépannage informatique, <br>
                        En pleine croissance dans le domaine de la création de sites Web.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h4>Produits</h4>
                    <hr class="bg-white">
                    <p><a href="https://download.teamviewer.com/download/TeamViewer_Setup.exe" class="text-white">Teamviewer</a></p>
                    <p><a href="prestaInfo.php" class="text-white">Prestations informatiques</a></p>
                    <p><a href="prestaWeb.php" class="text-white">Prestations web</a></p>
                    <p><a href="prestaInfo.php" class="text-white">Récuperations des données</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                    <h4>Liens utiles</h4>
                    <hr class="bg-white">
                    <p><a href="index.php" class="text-white">Accueil</a></p>
                    <p><a href="index.php" class="text-white">Qui sommes nous</a></p>
                    <p><a href="index.php" class="text-white">Services</a></p>
                    <p><a href="contact.php" class="text-white">Contact</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h4>Contact</h4>
                    <hr class="bg-white">
                    <p> <span> W.I.D</span></p>
                    <p> SASU au capital de 2 000 euros</p> 
                    <p> RCS : 832 288 898</p>
                    <p><i class="fa fa-home mr-3"></i>452, chemin Charbonnier – 97224 DUCOS</p>
                    <p> <i class="fa fa-envelope mr-3"></i><span> <a href="mailto:hjurin@webinfodom.com"> hjurin@webinfodom.com</a><br>
                    <i class="fa fa-phone mr-3"></i> 06 96 73 22 72</span></p>

                </div>

            </div>
        </div>
    

        <hr class="bg-white mx-4 mt-2 mb-1">

        <!-- Copyright-->
        <div class="container-fluid">
            <p class="text-center m-0 py-1">
                &copy; 2017 - Réalisation WebInfoDom Martinique !</a>
            </p>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
        
    <!-- jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script> -->
    
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    
</body>
</html>
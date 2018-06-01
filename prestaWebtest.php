<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
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
          	<!-- <header class="col-xs-12">
          		<div class="row r-m"> 
	                <nav class="col-xs-12">
		                <ul>
		                    <li><a href="index.php">ACCUEIL</a></li>
                            <li><a href="prestaInfo.php">PRESTATIONS INFORMATIQUES</a></li>
                            <li><a href="prestaWeb.php">Prestations Web</a></li>
                            <li><a href="contact.php"> <button class="blink_me btn btn-primary">NOUS CONTACTER</button></a></li>
		                </ul>
		            </nav>
           		</div>
        	</header> -->
        <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php"><img src="assets\img\logoemail.jpg" alt="logo WebInfoDom"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars text-white" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prestaInfo.php">PRESTATIONS INFORMATIQUE</a>
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="prestaWeb.php">PRESTATIONS WEB</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link blink_me btn btn-primary" href="contact.php">NOUS CONTACTER</a>
                    </li>
                </ul>
          </div>
        </div>
    </nav>
    <!-- Navigation -->

         <!---------------------------------------------------
                            Article presentation webinfodom
            ---------------------------------------------------->
			<section class="col-xs-12">
				<div class="row r-m"> 
            		<article class="col-xs-12">
            	

						<!-- <h1><span>W</span>eb<span>I</span>nfo<span>D</span>om</h1> -->
                        <br><br><h1><span>W</span>EBINFODOM</h1>

												
						<h2> Prestations Web</h2> <br>
						<!-- 	<ul>
								 <li>Création du site web</li>
								 <li>Hebergement du site web</li>
								 <li>Réservation du nom de domaine</li>
								 <li>Mise à jour du site</li>
							</ul> -->

                             <h3>Création de sites adaptés à vos besoins</h3>
                                <p>Nous réalisons des sites internet conformes à vos projets et vos capacités financières. <br>Un site vitrine, vous permet de présenter votre société et vos produits. <br>Un site ecommerce, vous sera plus utile pour vendre des produits ou des services.</p>

                            <h3>Hébergement de site web</h3>
                                <p>Nous vous proposons un hébergement en fonction du site que vous voulez mettre en place et en tenant compte des éventuelles évolutions.</p>

                            <h3>Réservation de nom de domaine</h3>
                                <p>Nous vous aidons à trouver un nom de domaine disponible et nous vous le réservons.</p>

                            <h3>Mise à jour de site</h3>
                                <p>Nous restons disponibles pour les mises à jour et les évolutions nécessaires.</p>

					</article>
				</div>
            </section>

    	</div>
    </main>
        <!---------------------------------------------------
                    PIED DE PAGE
        ---------------------------------------------------->
            <!-- <footer class="col-xs-12">
                 <div class="adresse">
                    <h4> <span> W.I.D</span></h4>
                    <h4> SASU au capital de 2 000 euros</h4> 
                    <h4> RCS : 832 288 898</h4>
                    <h4> Siège social : 452, chemin Charbonnier – 97224 DUCOS</h4>
                     <h4> <span>Email : <a href="mailto:hjurin@webinfodom.com"> hjurin@webinfodom.com</a><br>
                    Téléphone : 06 96 73 22 72</span></h4>
                </div> 
                <p>&copy; 2017 - Réalisation WebInfoDom Martinique !</p> 
            </footer> -->

            <!-- Footer -->
    <footer class="footer">

        <!-- Social Icons -->
        <!-- <div class="bg-primary">
            <div class="container">
                <div class="row py-4">
                    <div class="col-md-6 col-lg-7">
                        <h4 class="mb-0 white-text">Get connected with us on social networks!</h4>
                    </div>
                    <div class="col-md-6 col-lg-5 text-right">
                        <a><i class="fa fa-facebook white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-twitter white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-google-plus white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-linkedin white-text mr-lg-4 fa-2x"> </i></a>
                        <a><i class="fa fa-instagram white-text mr-lg-4 fa-2x"> </i></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Social Icons -->

        <!-- Footer Links -->
        <div class="container pt-5 pb-2">
            <div class="row">

                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h4>WEBINFODOM</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p>
                        Spécialisée, dans le service après-vente, l'installation, la maintenance et le dépannage informatique, <br>
                        En pleine croissance dans le domaine de la création de sites Web.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h4>Produits</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p><a href="https://download.teamviewer.com/download/TeamViewer_Setup.exe" class="">Teamviewer</a></p>
                    <p><a href="prestaInfo.php" class="text-white">Prestations informatiques</a></p>
                    <p><a href="prestaWeb.php"prestaInfo.php class="text-white">Prestations web</a></p>
                    <p><a href="prestaInfo.php" class="text-white">Récuperations des données</a></p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                    <h4>Liens utiles</h4>
                    <hr class="mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p><a href="index.php" class="text-white">Accueil</a></p>
                    <p><a href="index.php" class="text-white">Qui sommes nous</a></p>
                    <p><a href="index.php" class="text-white">Services</a></p>
                    <p><a href="contact.php" class="text-white">Contact</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h4>Contact</h4>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p> <span> W.I.D</span></p>
                    <p> SASU au capital de 2 000 euros</p> 
                    <p> RCS : 832 288 898</p>
                    <p><i class="fa fa-home mr-3"></i>452, chemin Charbonnier – 97224 DUCOS</p>
                    <p> <i class="fa fa-envelope mr-3"></i><span> <a href="mailto:hjurin@webinfodom.com"> hjurin@webinfodom.com</a><br>
                    <i class="fa fa-phone mr-3"></i> 06 96 73 22 72</span></p>

                </div>

            </div>
        </div>
        <!-- Footer Links-->

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
        
    <!-- <script src="assets/JS/test.js"></script> -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    
</body>
</html>

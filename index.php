<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Webinfodom | reparation en informatique | creation de site web</title>

	<!-- Styles CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

	 <!-- Pour Internet Explorer : S'assurer qu'il utilise la dernière version du moteur de rendu -->    
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    
    <!-- Affichage sans zoom pour les mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="reparation informatique et creation de site web">
    <meta name="author" content="webinfodom">

    <!-- google font pour les polices des textes 
    font-family: 'Calligraffitti', cursive;
    font-family: 'Mr Dafoe', cursive;
    -->
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Mr+Dafoe" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arizonia|Calligraffitti|Mr+Dafoe" rel="stylesheet">

	

	<!-- Bootstrap 4 CSS -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
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

	 <!-- Navigation -->
       	<div class="container-fluid r-m r-p">
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
                                <li class="nav-item">
                                    <a class="nav-link blink_me btn btn-primary" href="contact.php">NOUS CONTACTER</a>
                                </li>
                            </ul>
                      </div>
                </nav>
                </div>
            </div>
        </div>
        
           <!--      <nav class="navbar navbar-expand-md sticky-top bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php"><img src="assets\img\logoemail.jpg" alt="logo WebInfoDom"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarse">
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
                                <li class="nav-item">
                                    <a class="nav-link blink_me btn btn-primary" href="contact.php">NOUS CONTACTER</a>
                                </li>
                            </ul>
                      </div>
                    </div>
                </nav -->
                
             <!-- Navigation -->

    <!-- Carousel Slider -->
    <div class="container-fluid r-m r-p">
    <div class="row col r-m r-p">

    <div id="carouselLogo" class="carousel slide r-m r-p" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselLogo" data-slide-to="0" class="active">0</li>
            <li data-target="#carouselLogo" data-slide-to="1">1</li>
            <li data-target="#carouselLogo" data-slide-to="2">2</li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- slide 1 -->
            <div class="carousel-item active"  id="slide1">
                <img class="d-block img-fluid" src="assets/img/web3.jpg" alt="First slide">
                 <div class="carousel-caption d-none d-block d-flex align-items-center" style="height: 100%">
			        <!-- <div>
			          <img class="img-fluid laptop" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/185649/lcd.png" alt="laptop"/>
			        </div> -->
			        <div class="col">
			            <h2 class="product-caption-title"><br><br> Une entreprise à la pointe de la technologie</h2>
			        <p class="product-caption-details desktop-only">
							 <!-- <br> -->
			                        Spécialisée, dans le service après-vente, l'installation, la maintenance et le dépannage informatique, <br>
			                        En pleine croissance dans le domaine de la création de sites Web.
                    </p>
<br>

			          	<h3>Des professionnels à votre service</h3> <!-- <br> -->

									<p><i class="fa fa-hand-o-right" aria-hidden="true"></i> 20 ans d'expérience en : </p>

			                        <ul>
			                            <li class="mintext">Montage et installation d’ordinateurs sur mesure</li>
			                            <li class="mintext">Déploiement d’ordinateurs, imprimantes, de serveurs, routeurs, switch, caméras IP et analogiques, terminaux </li>
			                            <li class="mintext">Installation de systèmes d’exploitation et logiciels, sauvegarde  et restauration</li>
			                            <li>Maintenance et réparation de matériels informatiques</li>
			                            <li class="mitext">Récupération de données</li>
			                            <li class="mintext">Maîtrise des circuits de la distribution (constructeurs, grossistes, revendeurs, service après vente …)</li>
			                        </ul>

			                        <!-- <br> -->

			                        <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> Des développeurs full stack (techniques de codage front et back diversifiées)  pour des sites personnalisés et adaptés à vos besoins.
									</p>
			          <a href="contact.php"><button class="btn btn-primary small">CONTACTER NOUS</button></a>
			        </div>
      			</div>
        	</div>
            <!-- slide 2 -->
            <div class="carousel-item" id="slide2">
                <img class="d-block img-fluid" src="assets/img/maintenance.jpg" alt="second slide">
                 	<div class="carousel-caption d-none d-block d-flex align-items-center" style="height: 100%">
			        <!-- <div>
			          <img class="img-fluid laptop" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/185649/lcd.png" alt="laptop"/>
			        </div> -->
				        <div class="col">
				          	<h2 class="product-caption-title"><br><br><a href="prestaInfo.php"> Des prestations Informatiques</a></h2>
				          	<p class="product-caption-details"></p>
								 <!-- <br> -->

				              	<ul>
									<li class="mtext" style="color: white"><span> Audit et conseils en informatique</span></li>
									<li class="mtext" style="color: white"><span> Vente et installation de matériel informatique</span> </li>
									<li class="mtext" style="color: white"><span> Câblage, brassage et mise en réseau</span></li>
									<li class="mtext" style="color: white"><span> Contrats d’assistance et de maintenance</span></li>
		                        	<li style="color: white"><span> Diagnostic et dépannage informatique</span></li>
									<li style="color: white"><span> Récupération de données</span></li>
								</ul>

				                        <!-- <br> -->

				          	<a href="contact.php"><button class="btn btn-primary">CONTACTER NOUS</button></a>
				        </div>
	      			</div>
            </div>
            <!-- slide 3 -->
            <div class="carousel-item r-m r-p" id="slide3">
                <img class="d-block img-fluid" src="assets/img/web5.jpg" alt="Thirst slide">
                <div class="carousel-caption d-none d-block d-flex align-items-center r-m r-p" style="height: 100%">
			        <!-- <div>
			          <img class="img-fluid laptop" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/185649/lcd.png" alt="laptop"/>
			        </div> -->
				        <div class="col">
				          	<h2 class="product-caption-title"><br><br><a href="prestaWeb.php"> Des prestations Web</a></h2>
				          	<p class="product-caption-details"></p>
								<!-- <br> -->
				            <ul>
								<li style="color: black;font-weight: bold;">Création de sites adaptés à vos besoins</li>
								<li style="color: black;font-weight: bold;">Réservation de noms de domaine</li>
								<li style="color: black;font-weight: bold;">Hébergements de sites</li>
								<li class="mtext" style="color: black;font-weight: bold;">Référencement dans les annuaires et moteurs de recherche</li>
		                        <li class="mtext" style="color: black;font-weight: bold;">Mise à jour de site</li>
							</ul>
				                <!-- <br> -->

				          	<a href="contact.php"><button class="btn btn-primary">CONTACTER NOUS</button></a>
				        </div>
      			</div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselLogo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselLogo" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    </div>
    <!-- end Carousel Slider -->

    <!-- Card -->
    <div class="container container mt-4 mb-5">
        <h3 class="display-8 text-center"> WEBINFODOM </h3>
        <hr class="bg-dark mb-4 w-25">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/webi1.jpg" alt="WebInfoDom">
                    <div class="card-block p-3">
                        <h4 class="card-title"><a href="index.php">WEBINFODOM</a> </h4>
                        <p class="card-text">Une société a votre service pour la maintanance en informatique et la creation de site web.</p>
                        <a href="contact.php" class="btn btn-primary rounded-0 mb-2">CONTACTER NOUS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/its.jpg" alt="Informatique">
                    <div class="card-block p-3">
                        <h4 class="card-title"><a href="prestaInfo.php"> PRESTATIONS INFORMATIQUE</a></h4>
                        <p class="card-text">Maintanance informatique ,recupération de données,réparation ordinateur.</p>
                        <a href="contact.php" class="btn btn-primary rounded-0 mb-2">CONTACTER NOUS</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/web-350x350.png" alt="web">
                    <div class="card-block p-3">
                        <h4 class="card-title"><a href="prestaWeb.php"> PRESTATIONS WEB</a></h4>
                        <p class="card-text">Création ,hébergement de site web et nom de domaine.</p> <br>
                        <a href="contact.php" class="btn btn-primary rounded-0 mb-2">CONTACTER NOUS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="display-4">Produits</h3>
                <hr class="bg-dark w-25 ml-0">
                <p class="lead">
                    WEBINFODOM se donne comme mission de vous satisfaire dans les domaines informatiques et web.
                </p>
                <p>
                    Quand vous avez chez vous du matériel informatique ou que vous voulez être sur le web ou que vous avez perdu vos données nous sommes la pour vous satisfaire dans un délai très court.
                </p>
                <ul class="list-unstyled pl-4">
                    <li><i class="fa fa-check"></i>Contrat de maintenance en informatique </li>
                    <li><i class="fa fa-check"></i>Création de site web</li>
                    <li><i class="fa fa-check"></i>Récupération de données</li>
                </ul>
                <a href="contact.php" class="btn btn-outline-primary rounded-0"> CONTACTER NOUS</a>
            </div>
            <div class="col-md-4 mt-5">
                <img class="card-img-top" src="assets/img/webinfo300-301.jpg" alt="Card image cap">
            </div>
        </div>
    </div>
<!-- partenaire -->

    <div class="container pb-4">
        <h3 class="display-4 text-center">Partenaires</h3>
        <hr class="bg-dark w-25">
        <div id="carouselLogo" class="carousel slide pt-4" data-ride="carousel">
            <div class="carousel-inner text-center" role="listbox">
                <div class="carousel-item active">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/OVH.jpg" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/kaspersky.jpg" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/symfony.png" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/team.jpg" alt="First slide"></li>
                    </ul>
                </div>
                <div class="carousel-item">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/OVH.jpg" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/acer.jpg" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/kaspersky.jpg" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/symfony.png" alt="First slide"></li>
                    </ul>
                </div>
                <div class="carousel-item">
                    <ul class="list-inline row  mx-auto">
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/kaspersky.jpg" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/OVH.jpg" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/symfony.png" alt="First slide"></li>
                        <li class="col-md-3 col-sm-6"><img class="d-block img-fluid" src="assets/img/logos/acer.jpg" alt="First slide"></li>
                    </ul>
                </div>
            </div>
        </div6
    </div>

    <!-- Footer -->
    <footer class="footer text-white">

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
                    <!-- <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25"> -->
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
                    <p><a href="prestaWeb.php"prestaInfo.php class="text-white">Prestations web</a></p>
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

	
</body>
</html>
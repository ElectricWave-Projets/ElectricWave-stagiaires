<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion des stagiaires</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
      {{-- <link rel="stylesheet" href="{{asset('/style.css')}}"> --}}
      {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> --}}
      <style>
        .contact .info {
  width: 100%;
  background: #fff;
}
button {
  border: none;
  
  position: relative;
  padding: 0.7em 2.4em;
  font-size: 18px;
  background: transparent;
  cursor: pointer;
  user-select: none;
  overflow: hidden;
  color: white;
  z-index: 1;
  font-family: inherit;
  font-weight: 500;
}

button span {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  z-index: -1;
  border: 4px solid white;
}

button span::before {
  content: "";
  display: block;
  position: absolute;
  width: 8%;
  height: 500%;
  background: var(--lightgray);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-60deg);
  transition: all 0.3s;
}

button:hover span::before {
  transform: translate(-50%, -50%) rotate(-90deg);
  width: 100%;
  background: #001d3d;
}

button:hover {
  color: white;
}

button:active span::before {
  background: #001d3d;
}
.contact .info i {
  font-size: 20px;
  color: #001d3d;
  float: left;
  width: 44px;
  height: 44px;
  background: #eef7ff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #45505b;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #728394;
}

.contact .info .email,
.contact .info .phone {
  margin-top: 40px;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
  background: #001d3d;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 4px;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input[type=text],
.contact .php-email-form input[type=email] {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #001d3d;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #6b9080;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
.feature {
            width: 100px; 
            height: 100px; 
            text-align: center;
            line-height: 100px;
            font-size: 24px;
        }

        .box {
            padding: 20px;
            border: 1px solid #ddd; /* Add border styling as needed */
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease; /* Add transition for smooth hover effect */
        }

        .box:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Adjust box-shadow as needed */
        }
        .bg-blue {
    background-color: #001d3d;
    /* Add other styling properties as needed */
}
.rounded-circle-sm {
        width:200px; /* Adjust the width as needed */
        height: 150px; /* Adjust the height as needed */
        border-radius: 100%;
        overflow: hidden;
}
.bg-blue1 {
        background-color: #001d3d;
        /* Add other styling properties as needed */
    }
    .box {
    display: flex;
    flex-direction: column;
    align-items: center; /* Center icons horizontally */
    text-align: left; /* Align text to the left */
}

.box > * {
    flex-grow: 1;
}
.content-container {
    display: flex;
    flex-direction: column;
    align-items: center; /* Align items (titles) in the center horizontally */
}

.row .col-lg-4 {
    display: flex;
    align-items: flex-start; /* Align columns to the top of the row */
}
.title-container {
    display: flex;
    align-items: center;
    justify-content: center;
}
.col-md-4 {
  width: 13.333%;
  float: left;
  box-sizing: border-box;
}

.box {
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
  height: 200px; /* Change height to auto so the box can expand as needed */
  overflow: hidden; /* Hide any content that overflows the box */
}

.box img {
  max-width: 100%;
  max-height: 100%;
}

.box p {
  margin-bottom: 10px; /* Add some margin below the paragraph for spacing */
}

h2 {
  word-wrap: break-word; /* Allow long words to break and wrap within the box */
}
.box {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .box:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .box img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .box p {
        font-size: 16px;
        margin: 0;
    }
      </style>


    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="container px-0">
                        <a href="/"><img src="\images\IMG-20240429-WA0002-removebg-preview.png" width=auto height="60px" ></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">


                        <ul class="navbar-nav text-center ms-auto mt-lg-0  mt-2 mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="#About">About us </a></li>
                            <li class="nav-item"><a class="nav-link" href="#Clients">Nos clients </a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                            <li class="nav-item"><a class="nav-link"  href="/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->      
            <header class="bg-blue py-5">
                <div class="container px-5">                               
                    <div class="row gx-5 align-items-center justify-content-center"> 

                        <div class="col-lg-8 col-xl-7 col-xxl-6">       
                            <h1 class="display-5 fw-bolder text-white mb-2">Portail des Stagiaires de ELECTRIC WAVE </h1>
                            <div class="my-5 text-center text-xl-start">
                                <p class="lead fw-normal text-white-50 mb-4">Si vous avez terminé votre stage chez ELECTRIC WAVE et que vous avez besoin d'une attestation de stage, 
                                  veuillez accéder à votre profil et compléter les informations nécessaires. Si vous êtes intéressé par un stage chez ELECTRIC WAVE,
                                   veuillez remplir le formulaire disponible..</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
 
                                          <a href="add"> <button> Formulaire
        <span></span>
      </button></a> <!-- Add this inside your header section -->
{{-- <a href="{{ route('viewProfile') }}" class="btn btn-primary">Voir mon profile</a> --}}
<a href="{{ route('viewProfile') }}"> <button> Voir mon profile
  <span></span>
</button></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="\images\Electric wave.jpg" alt="hhhh" width="350px"  height="100%"/></div> 
                </div>
            </header><br><br>
            <!-- Features section-->
            <section class="py-0" id="features">
              <div class="container px-5 my-1">
                <div class="row">
                  <div  id="About" class="col-lg-12 text-center">
                      <h2 class="fw-bolder" style="color: #000000;">ELECTRIC WAVE: Qui sommes-nous ?</h2>
                      <p style="font-size: 16px; line-height: 1.6;">ELECTRIC WAVE est une société à responsabilité limitée spécialisée en Ingénierie Electrique et en Climatisation qui a pour objectif de participer activement aux nouvelles stratégies de mise à niveau à l’image des entreprises marocaines performantes. Cette optique se confond avec celle visant à assurer un transfert de technologie basé sur des compétences humaines et accompagné d’une formation adaptée, actualisée et efficace.</p>
                      <p style="font-size: 16px; line-height: 1.6;">Les technologies récentes requièrent une formation approfondie et un savoir-faire pointu qui permettent, non seulement, une installation et une mise en application des procédés dans le milieu industriel marocain, mais aussi une ingénierie de développement et d’amélioration des performances gérée par des pôles d’étude et de recherche.</p>
                      <p style="font-size: 16px; line-height: 1.6;">C’est la raison pour laquelle ELECTRIC WAVE n’a cessé d’œuvrer, depuis sa création en 1998, vers une stratégie de développement des compétences et de ressources humaines qualifiées aussi bien concernant les ingénieurs d’études que les techniciens d’exécution.</p>
                  </div>
              </div>
                  <div class="row gx-5">
                      <div class="col-lg-12 d-flex align-items-center justify-content-center mb-5 mb-lg-10 text-center">
                          <h2 class="fw-bolder mb-0 mt-3">Les Pôles et les services d'ELECTRIC WAVE</h2>
                      </div>
                  </div>
                  <div class="row gx-5">
                      <div class="col-lg-4">
                          <div class="box text-left h-100 d-flex align-items-center">
                              <div class="icon-container me-3">
                                  <img src="https://www.svgrepo.com/show/455017/electricity.svg" width="50" height="50" class="bi bi-search" alt="Electricity Icon">
                              </div>
                              <div class="content-container">
                                <div class="title-container">
                                  <h2 class="h5">Pôle Electricité</h2><br></div>
                                  <ul class="text-start mb-0">
                                      <li>Etude, conception et conseil en Ingénierie électrique</li>
                                      <li>Travaux d'électrification MT/BT</li>
                                      <li>Electricité et maintenance industrielle</li>
                                      <li>Etude et réalisation d'éclairage sur mesure</li>
                                      <li>Réseaux Divers: informatique téléphonique, sonorisation, etc...</li>
                                      <li>Energie Solaire (Photovoltaïque et thermique)</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="box text-left h-100 d-flex align-items-center">
                              <div class="icon-container me-3">
                                  <img src="https://www.svgrepo.com/show/454857/cold-temperature-thermometer.svg" width="50" height="50" class="bi bi-book" alt="Thermometer Icon">
                              </div>
                              <div class="content-container">
                              <div class="title-container">
                                  <h2 class="h5">Pôle Climatisation</h2> <br></div>
                                  <ul class="text-start mb-0">
                                      <li>Etude, conception et conseil en génie climatique</li>
                                      <li>Travaux de climatisation</li>
                                      <li>Travaux de ventilation</li>
                                      <li>VMC, désenfumage</li>
                                      <li>Chauffage piscine</li>
                                      <li>Climatisation industrielle</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="box text-left h-100 d-flex align-items-center">
                              <div class="icon-container me-3">
                                  <img src="https://www.svgrepo.com/show/234449/analytics-laptop.svg" width="50" height="50" class="bi bi-book" alt="Analytic Laptop Icon">
                              </div>
                              <div class="content-container">
                              <div class="title-container"><br>
                                  <h2 class="h5">Energy Monitoring System</h2></div>
                                  <br>
                                  <ul class="text-start mb-0">
                                      <li>Collecte des mesures de vos armoires électriques, compteur, etc...</li>
                                      <li>Les transforme en Graphiques élégants en temps réel</li>
                                      <li>Historique à la seconde près (du jour, semaine, mois et année de mesures) et évolutions des consommations permettent le suivi, diagnostic et réduction notable des factures d'électricité</li>
                                      <li>Tableaux de bord ergonomiques et personnalisables</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          
          
          

          
            <!-- Testimonial section-->

            <!-- Blog preview section-->
            <section class="py-5">
              <div class="container">
                <div class="container">
                  <div class="row">
                    <div class="container">
                      <div class="row">
                          <div class="col-lg-12" id="Clients">
                             
                              <h2>Quelques Clients qui nous ont fait confiance :</h2>
                              <div class="row">
                                <div class="col-md-2">
                                    <div class="box">
                                        <img src="\images\maroc-telecom-vector-logo.png" alt="Client 1">
                                        <p>MAROC TELECOM</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="box">
                                        <img src="\images\photo.1590891.jpg" alt="Client 2">
                                        <p>PREFECTURE MARRAKECH MEDINA</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="box">
                                        <img src="\images\Marrakesh-tour-1.jpg" alt="Client 3">
                                        <p>COMMUNE URBAINE DE MARRAKECH</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="box">
                                        <img src="\images\sperian.jpg" alt="Client 4">
                                        <p>SOPRIAM</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="box">
                                        <img src="\images\LOGO COVIREP.JPG" alt="Client 5">
                                        <p>COVIREP</p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="box">
                                        <img src="\images\LOGO COVIREP.JPG" alt="Client 6">
                                        <p>COVIREP</p>
                                    </div>
                                </div>
                            </div>
                            
                            
                                  <!-- Repeat the above pattern for other clients -->
                              </div>
                          </div>
                      </div>
                  </div>
                  
              
                    <!-- Call to action-->
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                  
                          <div class="text-center" id="contact"><br><br>
                            <u><h2 class="fw-bolder">Contact</h2><br><br></u>
                          
                        </div><br>
                  
                          <div class="row mt-1">
                  
                            <div class="col-lg-4">
                              <div class="info">
                                <div class="address">
                                  <i class="bi bi-geo-alt"></i>
                                  <h4>Localisation:</h4>
                                  <p>AN°6, Imm. Nakhil, Av. Yacoub El Mansour, Guéliz – Marrakech – Maroc</p>
                                </div>
                  
                                <div class="email">
                                  <i class="bi bi-envelope"></i>
                                  <h4>Email:</h4>
                                  <p> electricwave.maroc@gmail.com</p>
                                </div>
                  
                                <div class="phone">
                                  <i class="bi bi-phone"></i>
                                  <h4>Tél:</h4>
                                  <p>+212 5 24 44 60 07 – Fax: +212 5 24 44 60 24</p>
                                </div>
                  
                              </div>
                  
                            </div>
                  
                            <div class="col-lg-8 mt-5 mt-lg-0">
                  
                              {{-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> --}}
                                <form action="https://usebasin.com/f/38df9ab0d33e" method="POST" enctype="multipart/form-data" id="form" class="php-email-form">
                                <div class="row">
                                  <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                  </div>
                                  <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                  </div>
                                </div>
                                <div class="form-group mt-3">
                                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                  <div class="loading">Loading</div>
                                  <div class="error-message"></div>
                                  <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                              </form>
                  
                            </div>
                  
                          </div>
                  
                        </div>
                      </section>
                </div>
            </section>
        </main>



       


      {{-- @include('footer'); --}}
      @include('scrol');


       
      
      
      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
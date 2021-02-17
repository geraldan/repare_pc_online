<?php
//connection a la basse de donné façon simplifier en faisant une feuille separer pour ce conetcter a la basse de donnee ici nommé pdo.php et 'require' pour apeler la page ceci est une fonction
require ("pdo.php");
$pdo = (new Connection())->pdo();

//recuperation du select
$sql = $pdo->prepare("SELECT * FROM centres ");
// execute la requete
$sql->execute();
// afficher tout la table
$cats = $sql->fetchAll();
?>
<!-- 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
/* Exception class. */
require 'PHPMailer/src/Exception.php';
/* The main PHPMailer class. */
require 'PHPMailer/src/PHPMailer.php';
/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer/src/SMTP.php';
 
$mail = new PHPMailer(TRUE);
 
if(isset($_POST['name'])){
    try {
        /* Set the mail sender. */
        $mail->setFrom('gerald@portfolio.com', $_POST["name"] . " " . $_POST["first_name"] );
        /* Set the mail resever. */
        $mail->addAddress('');  
        /* Set the subject. */
        $mail->Subject = $_POST['objet'] ; // le sujet
        /* Set the mail message body. */
        $mail->Body = "le message : " . $_POST["message"] . " Le mail : " . $_POST["mail"];
 
        /* Enable SMTP debug output. */
        $mail->SMTPDebug = 0; // 2
 
        /* SMTP parameters. */
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // host localhost
        $mail->SMTPAuth = TRUE; // TRUE false
        $mail->SMTPSecure = 'tls'; // ssl
        $mail->Username = ''; //  mail adresse
        $mail->Password = '';  // password
        $mail->Port = 587; // port 587
 
        /* Disable some SSL checks. */
        $mail->SMTPOptions = array(
           'ssl' => array(
           'verify_peer' => false,
           'verify_peer_name' => false,
           'allow_self_signed' => true
           )
        );
 
        /* Finally send the mail. */
        $mail->send();
        $send = "<h4 class=\"send\">Votre message a bien été envoyer</h4>";
        }
        catch (\Exception $e){
            /* PHP exception (note the backslash to select the global namespace Exception class). */
            echo $e->getMessage();
        }
    }
:
?>
 -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>REPARE PC Online</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel='icon' href='https://vos-formations.com/favicon.ico' type='image/x-icon'/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v2.3.1
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script src="http://www.openlayers.org/api/OpenLayers.js"></script>
  <script src="assets/js/map.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">ACCUEIL</a></li>
          <li><a href="#about">Qui nous somme</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>REPARE PC Online</h1>
      <h2>sauvetage de pc en perdition</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <img src="img_1.jpg" alt="">
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
               <h3>QUI SOMMES-NOUS ?</h3>
               <p>Dès sa création en 1999, ONLINEFORMAPRO s’est rapidement imposée comme une entreprise innovante dans le domaine de la pédagogie inversée et pédagogie active par projet.
                En effet, entre Digital Learning et organisme de formation reconnu, notre culture pédagogique présente dans nos 21 sites en Bourgogne – Franche-Comté, Grand Est et Rhône-Alpes nous a permis d’accélérer la mutation de la formation via des solutions innovantes et adaptées notamment dans les métiers de l’informatique.</p>
              </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Services</h2>
          <p>Vous avez un problème avec votre matériel informatique ?</p>
          <p>Voici comment va se dérouler notre relation… .
            Vous êtes une entreprise ou une association qui souhaite se débarrasser de matériels informatiques obsolètes ?
            Toujours dans cet esprit et cette volonté de faire participer activement nos apprenants sur des cas concrets de maintenance ou télémaintenance informatique, « REPARE PC » vous propose de récupérer ce type de matériel. En effet, plutôt que de faire appel à une entreprise de recyclage, nos apprenants proposent de reconditionner votre ancien matériel pour les redistribuer à des familles dans le besoin ou à des associations d'aide à l'emploi.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Diagnostic</a></h4>
              <p class="description">Nous éféctuons diagnostic sur votre pc</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Instalation software</a></h4>
              <p class="description">Nous instalon les software nécéssaire au bon fonctionnemment de votre pc</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Maintenance</a></h4>
              <p class="description">Nous somme en mesure d'éféctuez des acts de maintenance sur votre pc</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Remaster</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts  section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p><strong>Clients content</strong> de nos services</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p><strong>PC réparé</strong> par nos aprenent</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p><strong>Rendez-vous</strong>pris par notre organisme</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p><strong>Apprenents</strong> en formation</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Contact</h2>
          <p>Pour nous contacter suivez les étapes si dessous</p>
          <img src="img_2.jpg" alt="">
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <h3 id="center">Addresse du centre</h3>
              <p id="adress"></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <h3>Horaires</h3>
              <p>lundi à vendredi 13:30 – 17:00</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <h3>Téléphone</h3>
              <p id="tel"></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <!--block map-->
          <div class="col-lg-6 " style="overflow-x: hidden">
              <div id="map" style="width: 450px; height: 374px; align-self: center">
              </div>
        </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <input style="display: none" type="text" name="center" id="fillCenter">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom / Prenom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Mail" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" name="email" id="sujet" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" placeholder="Décrivez votre problème"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div id="send" class="text-center"><button type="submit">Envoyer Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <img src="assets/img/portfolio/logo-03.svg" alt="">
              <div class="social-links mt-3">
                <a href="https://twitter.com/onlineformapro?lang=fr" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/Onlineformapro/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.linkedin.com/company/onlineformapro/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
            <h4>CONTACT</h4>
            <ul>
              <li><i class=""></i> 
                <p>19 rue de Praley, 70000 Vesoul</p>
              </li>
              <li><i class=""></i> 
                <p>Télephone:+33(0)3 84 76 52 44</p>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
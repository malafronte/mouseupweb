<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MouseUp | Un mouse per persone con disabilità</title>
  <meta name="description" content="Un mouse creato per aiutare persone con disabilità agli arti superiori. E' un progetto open software e
    open hardware che si può usare attraverso dispositivi android come smartphone e tablet">
  <meta name="keywords" content="mouseup, mouse, disabili, android, smartphone, tablet, utility, senza mani, progetto, villa greppi, alessandro greppi, riconoscimento vocale, voce, sensori, giroscopio, accelerometro">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/normal.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/animation.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    if (/mobile/i.test(navigator.userAgent)) document.documentElement.className += ' w-mobile';
  </script>
  <link rel="shortcut icon" type="image/sito2.0.1.1/" href="images/favicon.ico">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script><![endif]-->
</head>

<body>
  <div class="fix-header" id="home">
    <div class="w-container">
      <div class="w-nav" data-collapse="medium" data-animation="default" data-duration="400"></div>
    </div>
  </div>
  <div class="fixed-header">
    <div class="w-container container">
      <div class="w-row">

       <!--///////////////////////////////////////////////////////
       // Logo section 
       //////////////////////////////////////////////////////////-->


        <div class="w-col w-col-6 logo">
          <a href="#"><img class="logo"  src="images/siteWeb.png" alt="MouseUp"></a>
        </div>

        <!--///////////////////////////////////////////////////////
       // End Logo section 
       //////////////////////////////////////////////////////////-->

        <div class="w-col w-col-6">

       <!--///////////////////////////////////////////////////////
       // Menu section 
       //////////////////////////////////////////////////////////-->


          <div class="w-nav navbar" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
            <div class="w-container nav">
              <nav class="w-nav-menu nav-menu" role="navigation">
                <a class="w-nav-link menu-li" href="index.php">PROGETTO</a>
                <a class="w-nav-link menu-li" href="team.html">TEAM</a>
                <a class="w-nav-link menu-li" href="rassegnaStampa.html">RASSEGNA STAMPA</a>
              </nav>
              <div class="w-nav-button">
                <div class="w-icon-nav-menu"></div>
              </div>
            </div>
          </div>


          <!--///////////////////////////////////////////////////////
       // End Menu section 
       //////////////////////////////////////////////////////////-->


        </div>
      </div>
    </div>
  </div>

  <!--///////////////////////////////////////////////////////
       //  Slider section 
       //////////////////////////////////////////////////////////-->


  <div class="slidersection">
    <div class="sp-slideshow">
              <input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
              <label for="button-1" class="button-label-1"></label>

              <input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
              <label for="button-2" class="button-label-2"></label>
<!--
              <input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
              <label for="button-3" class="button-label-3"></label>

              <input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
              <label for="button-4" class="button-label-4"></label>

              <input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
              <label for="button-5" class="button-label-5"></label>
-->
              <label for="button-1" class="sp-arrow sp-a1"></label>
              <label for="button-2" class="sp-arrow sp-a2"></label><!--
              <label for="button-3" class="sp-arrow sp-a3"></label>
              <label for="button-4" class="sp-arrow sp-a4"></label>
              <label for="button-5" class="sp-arrow sp-a5"></label>-->

      <div class="sp-content">
        <div class="sp-parallax"></div>

        <ul class="sp-slider clearfix">
            <li><img src="images/faceSiteFinal.png" alt="image01" /></li>
            <li><img src="images/interni.png" alt="image02" /></li><!--
            <li><img src="images/slider/slider3.png" alt="image03" /></li>
            <li><img src="images/slider/slider4.png" alt="image04" /></li>
            <li><img src="images/slider/slider5.png" alt="image05" /></li>-->
        </ul>
    </div><!-- sp-content -->

      </div><!-- sp-slideshow -->
    </div>


<!--///////////////////////////////////////////////////////
       // End slider section 
       //////////////////////////////////////////////////////////-->



<!--///////////////////////////////////////////////////////
       // About section 
       //////////////////////////////////////////////////////////-->



      <div id="arancione">
      <div class="w-container">
        <!--<div id="about-animation">-->
        <div class="wrap">
          <div class="about">
            <h1 class="about-heading">Un mouse per persone con disabilità</h1>
            <div class="sepreater"></div>
          </div>
          <p class="about-des" style="text-align: justify;text-justify: inter-word;">Inizialmente l'idea era quella di creare uno strumento che permettesse di muovere un puntatore sullo schermo di un dispositivo, come ad esempio uno smartphone o un tablet.
            Successivamente ci siamo accorti di come questa idea potesse essere d'aiuto alle persone con difficoltà motorie agli arti superiori, per questo
            il progetto ha assunto consistenza ed è stata portato avanti dal gruppo con la volontà di creare un dispositivo in grado di aiutarle.
          </p>
          <br>
          <br>
          <div class="rwd-video">
            <iframe width="200" height="100" src="https://www.youtube.com/embed/O4k9u4WALlk?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
  </div>


<!--///////////////////////////////////////////////////////
       // End about section 
       //////////////////////////////////////////////////////////-->


  
<!--///////////////////////////////////////////////////////
       // Who We Are Section
       //////////////////////////////////////////////////////////-->


      <div id="grigio">
          <div class="w-container">
            <div class="wrap">
              <div class="process">
                <h1 class="our-process-heading">A CHI E' RIVOLTO?</h1>
                <div class="sepreater"></div>
              </div>
              <div class="process-text">
                <div class="process-text" style="text-align: justify;text-justify: inter-word;">
                  Il progetto ha lo scopo di aiutare persone aventi infermità agli arti superiori, vuole quindi rendere
                  più semplice l'utilizzo di un device da parte di persone affette da questa tipologia di malattie.
                  Ad ogni modo il progetto è anche rivolto a tutte le persone interessate allo sviluppo di idee rigaurdanti le tecnologie da noi
                  studiate ed utilizzate.
                </div>
                <img class="about-img" src="images/sito1.0/Images/motto.png" alt="52de15aa5d3566c14300015e_about.png">
              </div>
            </div>
          </div>

      </div>






<!--///////////////////////////////////////////////////////
       // End Who We Are section 
       //////////////////////////////////////////////////////////-->




<!--///////////////////////////////////////////////////////
       // Process section 
       //////////////////////////////////////////////////////////-->

  <!--<div class="process-parlex">
    <div class="parlex2-back">-->
  <div id="azzurro">
  <div class="w-container">
        <div class="wrap">
          <div class="process">
            <h1 class="our-process-heading">COME E' STATO <wbr>REALIZ</wbr>ZATO?</h1>
            <div class="sepreater"></div>
          </div>
          <div class="process-text">
            <div class="process-text" style="text-align: justify;text-justify: inter-word;">
              Il nostro dispositivo è composto da vari componenti, tra cui: un microcontrollore Arduino, un modulo Bluetooth,
              dei sensori (giroscopio e accelerometro) su un supporto un auricolare, e infine un'applicazione Android (DemoApp).
              <br>Il microcontrollore Arduino è collegato allo smartphone tramite una connessione Bluetooth. L'applicazione di sistema da noi sviluppata, rimane in ascolto di dati provenienti dal microcontrollore, e sulla base di questi è in grado di muovere un puntatore presente sullo schermo.
              <br>DemoApp gestisce inoltre un servizio di riconoscimento vocale che permette di impartire
              comandi al dispositivo, come ad esempio: click, double-click, swipe e scroll usando semplicemente la propria voce.
              <br>Il sistema è progettato per poter funzionare con i sensori esterni , oppure con quelli interni al
              telefono stesso. In quest'ultimo caso, il movimento del puntatore è dato da una lieve rotazione del dispositivo.
              <br>Questo sistema è diverso rispetto ad altri sistemi di riconoscimento vocale, come ad esempio: Ok Google, Cortana, Siri perchè
              permette di iniettare un vero e proprio evento "touch" senza dover toccare realmente il dispositivo .
              </div>
            <img class="about-img" src="images/pcbArduino.PNG"
                 alt="52de15aa5d3566c14300015e_about.png">
              <a  class="our-process-heading" href="./docs/presentazioneProgettoMouseUPweb.pdf" target="_blank" >Scarica la descrizione tecnica</a>
        </div>
      </div>
    <br>
    <div class="rwd-video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/HFeid49bdsI?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <br><br>
    <div class="rwd-video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/bJlBgmele5k?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <br><br>
    </div>
  </div>
  <!--</div>-->

<!--///////////////////////////////////////////////////////
       // End Process section 
       //////////////////////////////////////////////////////////-->


  <!--///////////////////////////////////////////////////////
       // Call to action section
       //////////////////////////////////////////////////////////-->


  <div class="call-to-action">
    <div class="call-to-back">
      <div class="w-container">
        <div class="wrap">
          <div class="w-row call-row">
            <div class="w-col w-col-9 cal-col-1">
                <br>
              <p>Tutto il progetto è disponibile su <a style="color:white" href="https://github.com/malafronte/mouseup">GitHub</a>.</p>
            </div>
            <div class="w-col w-col-3 " style="margin: 0 auto; text-align:center"><a  href="https://github.com/malafronte/mouseup"><img src="./images/GitHub-Mark-Light-64px.png"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--///////////////////////////////////////////////////////
         // End call to action section
         //////////////////////////////////////////////////////////-->


<!--///////////////////////////////////////////////////////
       // Contact section
       //////////////////////////////////////////////////////////-->
    <?php
    require 'includes/phpmailer/PHPMailerAutoload.php';
    include 'includes/manager/inviaMail.php';
    include_once 'includes/securimage/securimage.php';

    $securimage = new Securimage();

    if (isset($_POST['submit'])) {
      $captcha_ok = $securimage->check($_POST['captcha_code']);
      if ($captcha_ok) {
        sendMail($_POST['name'], $_POST['email'], $_POST['message']);
      } else { ?>
        <script>
          alert("Captcha errato! Riprovare");
        </script>
      <?php }
    }
    ?>
    <div class="contact-parlex" id="contact">
      <div class="parlex8-back">
        <div class="w-container">
          <div class="wrap">
            <div class="contact-div">
              <h1 class="contact-heading">CONTATTACI</h1>

              <div class="sepreater"></div>
            </div>
            <p class="contact-para">Se hai delle domande contattaci!
              <br>Cercheremo di risponderti il prima possibile e nel modo più esaustivo.</p>

            <div class="w-form">
              <form action="index.php" method="post">
                <label for="name">NOME:</label>
                <input class="w-input" type="text" placeholder="Inserisci il tuo nome" name="name" id="name">
                <label for="email">INDIRIZZO E-MAIL:
                  <small id="invalidEmail" style="color: red;" hidden="hidden">Email inserita non valida
                  </small>
                </label>
                <input class="w-input" placeholder="Inserisci la tua e-mail" type="text" name="email" id="email"
                       onchange="validate()" required>
                <label for="message">MESSAGGIO:</label>
                        <textarea class="w-input message" placeholder="Scrivi qui il tuo messaggio"
                                  name="message" id="message" required></textarea><br>

                <div class="w-row">
                  <div class="w-col w-col-4">
                    <img id="captcha" src="includes/securimage/securimage_show.php" alt="CAPTCHA Image"/>
                  </div>
                  <div class="w-col w-col-4">
                    <input class="captcha-input" type="text" name="captcha_code" maxlength="6" placeholder="Inserisci captcha" required/>
                    <a href="#" onclick="document.getElementById('captcha').src = 'includes/securimage/securimage_show.php?' + Math.random(); return false">[
                      Cambia Immagine ]</a>
                  </div>
                  <div class="w-col w-col-4">
                    <input style="float: right; clear: both;" class="w-button" type="submit" value="INVIO" id="submit" name="submit">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      function validate() {
        if (!isEmail($('#email').val())) {
          $("#invalidEmail").show();
          document.getElementById("email").style.borderColor = "red";
          $("#submit").prop('disabled', true);
        } else {
          document.getElementById("email").removeAttribute("style");
          $("#invalidEmail").hide();
          $("#submit").prop('disabled', false);
        }
      }

      function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
      }
    </script>

<!--///////////////////////////////////////////////////////
       // End Contact section
       //////////////////////////////////////////////////////////-->

<!--///////////////////////////////////////////////////////
       // Footer section 
       //////////////////////////////////////////////////////////-->  

  <div class="footer-parlex">
    <div class="parlex9-back">
      <div class="w-container">
        <div class="wrap">
          <img class="footer-logo" src="images/scuola.png" alt="Villa Greppi">
          <div>
              <p class="copyright-area">Visita il sito della nostra scuola: <a href="http://www.issgreppi.gov.it" title="villagreppi" target="_blank">I.I.S.S Alessandro Greppi</a></p></div>
              <p class="copyright-area"><a href="termini_Condizioni.html">Termini e condizioni</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

       <!--///////////////////////////////////////////////////////
       // End Footer section 
       //////////////////////////////////////////////////////////-->

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/normal.js"></script>
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/carousels.js"></script>
  <script type="text/javascript" src="js/slider-modernizr.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/portfolio-effects.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/animation.js"></script>

</body>
</html>
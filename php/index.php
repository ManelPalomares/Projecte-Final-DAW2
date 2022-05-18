<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../img/logo.svg" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>SoundBOX</title>
</head>
<body>
    <header class="headerPrincipal">
        <nav class="navbar navbar-fixed-top navbar-inverse">
            <div class="container divLogoPrincipal">
                <div class="navbar-header">
                    <button id="btnMenuResponsive" type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false" onclick="comprovarBoton();">
                        <span class="sr-only">Navegació</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="../img/logo.svg" alt="logoSoundBox">
                </div>
                <div class="collapse navbar-collapse navbar-right menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="responsiveLiExp"><a href="#mostra">Mostra</a></li>
                        <li class="responsiveLiSob"><a href="#plans">Plans</a></li>
                        <li><a href="#contacte">Contacte</a></li>
                        <div class="divBotonsNav">
                            <a href="login.php" class="botonsIR estilbtnLogin">Iniciar sessió</a>
                            <a href="register.php" class="botonsIR btnRegistrat estilbtnLogin2">Registrat ja</a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Reproductor fixed bottom -->
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="audio-player-container">
            <audio src="../audio1.mp3" preload="metadata" id="audio-1"></audio>
            <div class="info-canco">
                <p class="artista">Artista</p>
                <span> - </span>
                <p class="titol">Título</p>
            </div>
            <div class="reproductor">
                <div class="play-button play" id="play" onclick="play(1)">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>             
                </div>
                <span id="current-time">0:00</span>
                <input type="range" id="seek-slider" max="100" value="0">
                <span id="duration">0:00</span>
                <input type="range" id="volume-slider" max="100" value="50">
                <button class="mute-button unmuted" id="mute"><i class="fa-solid fa-volume-high mute-icon"></i></button>
                <button class="like-button"><i class="fa-solid fa-thumbs-up like-icon"></i></button>
                <button class="add-button"><i class="fa-solid fa-plus add-icon"></i></button>
            </div>
        </div>
    </div>
    <!-- FIN Reproductor fixed bottom -->
    
    <section class="container imatgeFons">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 divMain">
                <h1>SoundBOX, on la música no té límits</h1>
                <h2>En SoundBOX trobaràs una gran varietat de música sense copyright</h2>
                <a href="#mostra"><button class="btnInici btnEscl">Escolta'ns</button></a>
            </div>
        </div>
    </section>

    <section id="mostra" class="container seccioMostra" data-aos="fade-down">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 divMostra">
                <h2>Mostra del Catàleg</h2>
                <p>Aquí una mostra d'algunes de les cançons que disposem en el nostre cataleg</p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Musica -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Musica -->
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- Musica -->
            </div>
        </div>
    </section>

    <section id="plans" class="container seccioPlans" data-aos="fade-down">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 divPlans">
                <h2>Tipus de plans</h2>
                <p>Gaudeix de la música a través dels nostres tipus de plans que tenim preparats per a tu</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="pla1 colPla1">
                    <p class="textProva">Prova gratuïta de 30 dies</p>
                    <h3>Pla Prèmium Mensual</h3>
                    <p class="textPreu">Per només 5.99€ al més</p>
                    <hr>
                    <div class="divAventatges">
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Escolta, descarrega i puja les teves cançons</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Crear llistes privades o amb els teus amics</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Segueix a usuaris i vota les teves cançons preferides</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Escolta de forma completa les cançons prèmium</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Accedeix a la categoria prèmium</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Monetitza les teves cançons</p>
                    </div>
                    <button class="botonsIR estilbtnLogin btnPremium">SOLICITAR</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="pla1 colPla2">
                    <p class="textProva">Prova gratuïta de 30 dies</p>
                    <h3>Pla Prèmium Anual</h3>
                    <p class="textPreu">Per només 59.99€ al any</p>
                    <hr>
                    <div class="divAventatges">
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Escolta, descarrega i puja les teves cançons</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Crear llistes privades o amb els teus amics</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Segueix a usuaris i vota les teves cançons preferides</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Escolta de forma completa les cançons prèmium</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Accedeix a la categoria prèmium</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Monetitza les teves cançons</p>
                    </div>
                    <button class="botonsIR estilbtnLogin btnPremium">SOLICITAR</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="pla1">
                    <p class="textProva textAmplada">Gaudeix del contingut gratuït</p>
                    <h3>Pla Gratuït</h3>
                    <p class="textPreu">Per només 0€</p>
                    <hr>
                    <div class="divAventatges">
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Escolta, descarrega i puja les teves cançons</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Crear llistes privades o amb els teus amics</p>
                        <span class='bx bx-chevron-right iconaVentatges'></span>
                        <p>Segueix a usuaris i vota les teves cançons preferides</p>
                    </div>
                    <a href="register.php"><button class="botonsIR estilbtnLogin btnPremium">REGISTRAT JA</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="contacte" class="container seccioContacte" data-aos="fade-down">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divPregunta">
                <h2>Alguna pregunta?</h2>
                <p>Omple el següent formulari en cas de voler-te posar en contacte amb nosaltres</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 divContacte">
                <form method="post">
                    <p class="estilInput">
                        <label for="nomCognomsI">Nom i Cognoms
                            <span>*</span>
                        </label>
                        <input type="text" name="nomInici" id="nomCognomsI" placeholder="Escriu el teu nom i cognom" required>
                    </p>
                    <p class="estilInput">
                        <label for="emailI">Email
                            <span>*</span>
                        </label>
                        <input type="email" name="emailInici" id="emailI" placeholder="Escriu el teu correu" required>
                    </p>
                    <p class="estilInput">
                        <label for="telefonI">Telèfon
                        </label>
                        <input type="tel" name="telefonInici" id="telefonI" placeholder="Escriu el teu telèfon">
                    </p>
                    <p class="estilInput">
                        <label for="assumpteI">Assumpte
                            <span>*</span>
                        </label>
                        <input type="text" name="assumpteInici" id="assumpteI" placeholder="Escriu l'assumpte" required>
                    </p>
                    <p class="estilInput">
                        <label for="missatgeI">Missatge
                            <span class="obligatorio">*</span>
                        </label>
                        <textarea name="missatgeInici" id="missatgeI"  placeholder="Deixa aquí el teu comentari..." required></textarea>
                    </p>
                    <button type="submit" name="enviarInici" id="enviarI" class="btnFormulari">
                        <p>Enviar</p>
                    </button>
                    <p class="avis">
                        <span> * </span>els camps son obligatoris.
                    </p>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <span class='bx bxl-twitter iconesFooter'></span>
        <span class='bx bxl-facebook-square iconesFooter'></span>
        <span class='bx bxl-instagram iconesFooter'></span>
        <span class='bx bxl-gmail iconesFooter'></span>
        <p>Copyright &copy; 2022 - <span>SoundBOX</span></p>
    </footer>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/audioplayer.js" crossorigin="anonymous"></script>
</body>
</html>

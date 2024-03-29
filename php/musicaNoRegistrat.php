<?php
  $nomcat = $_GET["cat"];
  //Sessions controlar.

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SoundBox</title>
  <link rel="stylesheet" href="../recursosAdmin_Client/feather/feather.css">
  <link rel="stylesheet" href="../recursosAdmin_Client/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../recursosAdmin_Client/datatables.net-bs/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="../css/client.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="../img/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../js/noRegistrado.js"></script>
</head>
<body onload="carregarMusica('<?= $nomcat ?>');">
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row menuFons">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center noFonsColor">
        <a class="navbar-brand brand-logo mr-5"><img src="../img/logoAC.PNG" class="mr-2 logoSoundBox" alt="logoSoundBOX"/></a>
        <a class="navbar-brand brand-logo-mini"><img src="../img/logoMini.PNG" class="logoMiniSoundBox" alt="logoSoundBOX"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end noFonsColor">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu colIcona"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <span class="icon-search colIcona iconaLupa"></span>
                </span>
              </div>
              <input type="text" class="form-control inputBuscar" id="buscarNom" placeholder="Buscar cançó" aria-label="search" aria-describedby="search" onkeyup="buscarNomCanço('<?= $nomcat ?>');">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../img/defaultUser.svg" class="colIcona" alt="profile"/>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu colIcona"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">    
      <nav class="sidebar sidebar-offcanvas sidebarColorFons" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link efecteHoverMenu" href="exploraNoRegistrat.php">
              <span class='bx bx-left-arrow-alt estilIcones iconPers'></span>
              <span class="menu-title textSidebar">Tornar</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">
        <div class="content-wrapper mainCFons">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 id="nomCategoria" class="textIniciClient"><?php echo $nomcat ?></h3>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <form method="post">
                      <select name="filtrar" id="filtrarPer" class="css_inputsLogReg selectFiltrar custom-select" onchange="aplicarFiltre('<?= $nomcat ?>');">
                        <option selected disabled>Estat d'ànim</option>
                        <option value="alegre">Alegre</option>
                        <option value="poderos">Poderós</option>
                        <option value="trist">Trist</option>
                        <option value="tranquil">Tranquil</option>
                        <option value="enfadat">Enfadat</option>
                        <option value="dramatic">Dramàtic</option>
                        <option value="suspens">Suspens</option>
                        <option value="epic">Èpic</option>
                      </select>
                      <input type="button" value="Eliminar filtre" class="btn btn-sm btn-light btnAfegirC btnFiltrarP" onclick="carregarMusica('<?= $nomcat ?>');">
                    </form>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Reproductor fixed bottom -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="divAudio" class="audio-player-container">
              <audio src="" preload="metadata" id="audio-1"></audio>
              <div class="info-canco">
                <p id="nomA" class="artista">Artista</p>
                <span> - </span>
                <p id="titolM" class="titol">Títol</p>
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
                <button class="mute-button unmuted" id="mute"><span id="iconoAudio" class="fa-solid fa-volume-high mute-icon"></span></button>
              </div>
            </div>
          </div>
          <!-- FIN Reproductor fixed bottom -->
          <div class="row">
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-12 mb-12 stretch-card transparent">
                  <div class="card card-tale divPublicitat">
                    <div class="card-body divTextPubli">
                      <p class="fs-30 mb-4 text-center font-weight-bold">PUBLICITAT</p>
                      <p class="mb-2">Vols aparèixer aquí? Envia'ns un correu a <span>soundboxdaw2@gmail.com</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin modificarGridMargin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h4 id="nomCategoria" class="musicaTexts">Cançons més valorades</h4>
                </div>
              </div>
            </div>
          </div>
          <div id="musicaIdTop" class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card divCategoria">
                <div class="card-body imatgeMusica">
                  <h5 class="card-title">Cançó 1</h5>
                  <div class="media divMedia">
                    <div class="media-body zonaBotonsMusica">
                      <span class='bx bx-play-circle'></span>
                      <span class='bx bxs-download iconaDescarrega'></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin modificarGridMargin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h4 id="nomCategoria" class="musicaTexts">Cançons premium de <?php echo $nomcat ?></h4>
                </div>
              </div>
            </div>
          </div>
          <div id="musicaIdPremium" class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card divCategoria">
                <div class="card-body imatgeMusica">
                  <h5 class="card-title">Cançó 1</h5>
                  <div class="media divMedia">
                    <div class="media-body zonaBotonsMusica">
                      <span class='bx bx-play-circle'></span>
                      <span class='bx bxs-download iconaDescarrega'></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin modificarGridMargin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h4 id="nomCategoria" class="musicaTexts">Totes les cançons de <?php echo $nomcat ?></h4>
                </div>
              </div>
            </div>
          </div>
          <div id="musicaIdTot" class="row">
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card divCategoria">
                <div class="card-body imatgeMusica">
                  <h5 class="card-title">Canço 1</h5>
                  <div class="media divMedia">
                    <div class="media-body zonaBotonsMusica">
                      <span class='bx bx-play-circle'></span>
                      <a href=""><span class='bx bxs-download iconaDescarrega'></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-12 mb-12 stretch-card transparent">
                  <div class="card card-tale divPublicitat">
                    <div class="card-body divTextPubli">
                      <p class="fs-30 mb-4 text-center font-weight-bold">PUBLICITAT</p>
                      <p class="mb-2">Vols aparèixer aquí? Envia'ns un correu a <span>soundboxdaw2@gmail.com</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. <span>SoundBOX</span> - Tots els drets reservats.</span>
            </div>
          </footer>
        </div>
      </div>
  </div>
  <script src="../recursosAdmin_Client/js/vendor.bundle.base.js"></script>
  <script src="../js/client/template.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <script src="../js/client/off-canvas.js"></script>
  <script type="text/javascript" src="../js/audioplayer.js" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.js" crossorigin="anonymous"></script>
</body>
</html>


<?php include 'config.php';?>
<!-- WEBSITE BRUNOVIDASI.COM - TODOS OS DIREITOS RESERVADOS - DESENVOLVIMENTO: BRUNO VIEIRA - CONTATO@BRUNOVIDASI.COM -->
<!DOCTYPE html>
<html lang="<?php echo ($idioma=='pt') ? 'pt-br' : 'en'; ?>">

<?php include 'head.php';?>

<body class="home <?php echo ($idioma=='pt') ? 'pt' : 'en'; ?>">

<div id="home" class="hashAncor" style="height: 82px; margin-top: -82px; z-index: -1; position: relative;"></div>

<!-- HEADER -->
<header id="header">
  <div id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="row">
            <div class="grid_2">
              <h1>
                <a href="<?php echo BASE_URL; ?>">
                  <span class="block">
                    <span>Bruno</span>
                    <span>Vieira</span>
                  </span>
                </a>
              </h1>
            </div>
            <div class="grid_10">
              <nav>
                <ul class="sf-menu">
                  <li><a href="#home"><?php echo ($idioma=='pt') ? 'Início' : 'Home'; ?></a></li>
                  <li><a href="#about"><?php echo ($idioma=='pt') ? 'Sobre' : 'About'; ?></a></li>
                  <li><a href="#services"><?php echo ($idioma=='pt') ? 'Serviços' : 'Services'; ?></a></li>
                  <li><a href="#projects"><?php echo ($idioma=='pt') ? 'Projetos' : 'Projects'; ?></a></li>
                  <li><a href="#contacts"><?php echo ($idioma=='pt') ? 'Contato' : 'Contact'; ?></a></li>
                  <li><a href="<?php echo BASE_URL.PATH.'?lang='.$idioma_reverso; ?>"><?php echo ($idioma=='pt') ? 'English' : 'Português'; ?></a></li>
                </ul>
                <div class="clearfix"></div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner1">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="slogan">
            <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"><?php echo ($idioma=='pt') ? 'Prazer em conhecer você' : 'Nice to meet you'; ?></h6>
            <span class="second wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><?php echo ($idioma=='pt') ? 'Tenho a melhor solução para o seu site ou sistema' : 'I have the best idea for your website or information system'; ?></span>
            <!-- <a class="btn-big wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" href="#"><?php echo ($idioma=='pt') ? 'Leia Mais' : 'Learn More'; ?></a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section id="content">
  <div id="about" class="hashAncor" style="height: 82px; margin-top: -82px; z-index: -1; position: relative;"></div>
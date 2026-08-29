<?php include 'config.php';?>
<!-- WEBSITE BRUNOVIDASI.COM - TODOS OS DIREITOS RESERVADOS - DESENVOLVIMENTO: BRUNO VIEIRA - CONTATO@BRUNOVIDASI.COM -->
<!DOCTYPE html>
<html lang="<?php echo ($idioma=='pt') ? 'pt-br' : 'en'; ?>">

<?php include 'head.php';?>

<body class="home <?php echo ($idioma=='pt') ? 'pt' : 'en'; ?>">

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
                  <li><a href="<?php echo BASE_URL; ?>#home"><?php echo ($idioma=='pt') ? 'Início' : 'Home'; ?></a></li>
                  <li><a href="<?php echo BASE_URL; ?>#about"><?php echo ($idioma=='pt') ? 'Sobre' : 'About'; ?></a></li>
                  <li><a href="<?php echo BASE_URL; ?>#services"><?php echo ($idioma=='pt') ? 'Serviços' : 'Services'; ?></a></li>
                  <li><a href="<?php echo BASE_URL; ?>#projects"><?php echo ($idioma=='pt') ? 'Projetos' : 'Projects'; ?></a></li>
                  <li><a href="<?php echo BASE_URL; ?>#contacts"><?php echo ($idioma=='pt') ? 'Contato' : 'Contact'; ?></a></li>
                  <li><a href="<?php echo BASE_URL.PATH.'?id='.$_GET['id'].'&lang='.$idioma_reverso; ?>"><?php echo ($idioma=='pt') ? 'English' : 'Português'; ?></a></li>
                </ul>
                <div class="clearfix"></div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section id="content">
  <div id="about" class="hashAncor" style="height: 82px; margin-top: -82px; z-index: -1; position: relative;"></div>
<?php include('header_mini.php'); ?>

<style>
.btn-big {
  color: #0077bb !important;
  border: 1px solid #0077bb !important;
}
.btn-big:hover {
  color: #fff !important;
  border: 1px solid #0077bb !important;
}
</style>

<?php

if($_GET['id']) $id = (int) $_GET['id'];
else $id = 0;

$sql = "SELECT * FROM bv_portfolio WHERE id = {$id} LIMIT 1";

$result = @mysql_query($sql);

if(mysql_num_rows($result) != 1){
  ?>

  <div class="banner2">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="box">

            <div class="row" style="text-align:center;">

              <h2>
                
                <?php 

                echo ($idioma=='pt') ? 'O Projeto que está procurando não existe! <br /> <a href="index.php#projects">clique aqui para ver todos os projetos.</a>' : 'The project you are looking for does not exist! <br /> <a href="index.php#projects">Click here to view all projects</a>'; 

                ?>
              </h2>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
}else{

while($projeto = mysql_fetch_array($result)) {

?>
  <div class="banner2">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="box">

            <div class="row">

              <div class="grid_7">
                <div class="vimeo-video1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                  <a href="<?php echo $projeto['link']; ?>" target="_blank">
                    <img src="images/sites/<?php echo $projeto['imagem']; ?>" />
                  </a>
                </div>
              </div>

              <div class="grid_5">
                <br />

                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <?php echo ($idioma=='pt') ? utf8_encode($projeto['introducao']) : utf8_encode($projeto['introduction']); ?>
                </p>

                <?php if(!empty($projeto['introducao'])) echo '<br />'; ?>

                <span class="heading wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <?php echo ($idioma=='pt') ? utf8_encode($projeto['descricao']) : utf8_encode($projeto['description']); ?>
                </span>

                <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                  <a href="<?php echo $projeto['link']; ?>" target="_blank">
                    <?php echo utf8_encode($projeto['nome']); ?>
                  </a>
                </h3>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <?php echo ($idioma=='pt') ? utf8_encode($projeto['texto']) : utf8_encode($projeto['text']); ?>
                </p>
                <br />

                <!--

                <?php if(isset($projeto['frase'])){ ?>
                <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                  <?php echo ($idioma=='pt') ? utf8_encode($projeto['frase']) : utf8_encode($projeto['sentence']); ?>
                </h5>

                  <?php if(isset($projeto['autor'])){ ?>
                  <span class="heading wow fadeInUp right" data-wow-duration="1s" data-wow-delay="0.6s">
                    <?php echo ($idioma=='pt') ? 'diz '.utf8_encode($projeto['autor']) : utf8_encode($projeto['autor']).' says'; ?>.
                  </span>
                  <?php } ?>
                  
                <?php } ?>

                -->

                <br />
                <br />

                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                  <?php echo ($idioma=='pt') ? utf8_encode($projeto['depoimento']) : utf8_encode($projeto['testimony']); ?>
                </p>

                <?php if(isset($projeto['link'])){ ?>
                  <br />
                  <br />
                  <a class="btn-big wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" href="<?php echo $projeto['link']; ?>" target="_blank">
                    <?php echo ($idioma=='pt') ? 'Acesse Agora' : 'Visit Now'; ?>
                  </a>
                <?php } ?>
              </div>

            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <?php }

  }
  ?>

<?php include('footer.php'); ?>
<?php include('header_mini.php'); ?>

<style>
.btn-big {
  color: #0077bb !important;
  background-color: #fff !important;
  border: 1px solid #0077bb !important;
  cursor: pointer;
}
.btn-big:hover {
  color: #fff !important;
  border: 1px solid #0077bb !important;
  cursor: pointer;
}

#contact-form textarea {
  height: 250px !important;
}
</style>

<div class="wrapper2">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2><?php echo ($idioma=='pt') ? 'Faça agora o seu orçamento' : 'Make your budget now'; ?></h2>
          </div>
        </div>
      </div>


      <form id="contact-form" method="post" action="<?php echo BASE_URL; ?>" id="form-orcamento">
        <div class="row">

          <div class="grid_6">
            <div class="box3">
              <div class="heading">
                <img src="images/user.png" alt="" class="wow rotateIn" data-wow-duration="1.5s" data-wow-delay="0.1s"/>
              </div>
              <div class="content maxheight1">

                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <a href="#"><?php echo ($idioma=='pt') ? 'Seus dados' : 'About you'; ?></a>
                </h4>

                <br />

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" id="lbl-name">
                  <input type="text" name="nome" placeholder="<?php echo ($idioma=='pt') ? 'Nome' : 'Name'; ?>" data-constraints="@Required @JustLetters" id="form-name" value="<?php echo (isset($_GET["nome"])) ? $_GET["nome"] : "" ?>"/>
                </label>

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" id="lbl-email">
                  <input type="text" name="email" placeholder="<?php echo ($idioma=='pt') ? 'E-mail' : 'Email'; ?>" data-constraints="@Required @Email" id="form-email" value="<?php echo (isset($_GET["email"])) ? $_GET["email"] : "" ?>"/>
                </label>

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <input type="text" name="phone" placeholder="<?php echo ($idioma=='pt') ? 'Telefone' : 'Phone'; ?>" data-constraints="@Required" id="form-phone"/>
                </label>

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                  <input type="text" name="cellphone" placeholder="<?php echo ($idioma=='pt') ? 'Celular' : 'Cellphone'; ?>" data-constraints="@Required" id="form-cellphone"/>
                </label>

              </div>
            </div>
          </div>

          <div class="grid_6">
            <div class="box3">
              <div class="heading">
                <img src="images/preferences_system_windows.png" alt="" class="wow rotateIn" data-wow-duration="1.5s" data-wow-delay="0.1s" id="img_project"/>
              </div>
              <div class="content maxheight1">
                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <a href="#"><?php echo ($idioma=='pt') ? 'Seu projeto' : 'Your project'; ?></a>
                </h4>

                <br />

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <input type="radio" name="tipo" value="1" id="project_1" /> <?php echo ($idioma=='pt') ? 'Site' : 'Web Site'; ?>
                </label>

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <input type="radio" name="tipo" value="2" id="project_2" /> <?php echo ($idioma=='pt') ? 'Sistema Web' : 'Web System'; ?>
                </label>

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <input type="radio" name="tipo" value="3" id="project_3" /> <?php echo ($idioma=='pt') ? 'Aplicativo' : 'Application'; ?>
                </label>

                <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <input type="radio" name="tipo" value="0" id="project_0" /> <?php echo ($idioma=='pt') ? 'Outro / Não sei' : 'Other / I don\'t know'; ?>
                </label>

              </div>
            </div>
          </div>

        </div>

        <div class="row">

        <div class="grid_12" style="margin-top: 30px">
            <div class="box3">
              <div class="heading">
                <img src="images/note.png" alt="" class="wow rotateIn" data-wow-duration="1.5s" data-wow-delay="0.1s"/>
              </div>
              <div class="content maxheight1">
                <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <a href="#"><?php echo ($idioma=='pt') ? 'Detalhes do seu projeto' : 'Details about your project'; ?></a>
                </h4>

                <label class="message wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" id="lbl-msg">
                  <textarea id="form-msg" name="msg" placeholder="<?php echo ($idioma=='pt') ? 'Escreva em detalhes o que você precisa' : 'Write in details what do you need'; ?>"
                            data-constraints='@Required @Length(min=20,max=999999)'><?php echo (isset($_GET["msg"])) ? $_GET["msg"] : "" ?></textarea>
                </label>

              </div>
            </div>
          </div>


          <div class="grid_12" style="text-align: center;">
              <input type="hidden" name="envio" value="396485" />

              <br / >
              <button type="submit" class="btn-big wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.8s" target="_blank" style="visibility: visible; -webkit-animation-duration: 1s; -webkit-animation-delay: 0.8s;" id="enviar-email">
                <?php echo ($idioma=='pt') ? 'Enviar Orçamento' : 'Send your budget'; ?>
              </button>

              <script>
                $(document).ready(function(){

                  $('#form-name').val('<?php echo (isset($_GET["nome"])) ? $_GET["nome"] : "" ?>');
                  $('#form-email').val('<?php echo (isset($_GET["email"])) ? $_GET["email"] : "" ?>');
                  $('#form-msg').val('<?php echo (isset($_GET["msg"])) ? $_GET["msg"] : "" ?>');

                  <?php if(isset($_GET["nome"])){ ?>
                    $('#lbl-name span ._placeholder').addClass('hidden');
                  <?php } ?>

                  <?php if(isset($_GET["email"])){ ?>
                    $('#lbl-email span ._placeholder').addClass('hidden');
                  <?php } ?>

                  <?php if(isset($_GET["msg"])){ ?>
                    $('#lbl-msg span ._placeholder').addClass('hidden');
                  <?php } ?>
                  
                  $('#enviar-email').on('click', function(){
                    var nome = $('#form-name').val();
                    var mensagem = "<?php echo ($idioma=='pt') ? ', tudo bem? Eu preciso que você confirme o envio desta mensagem para mim clicando em OK, em breve eu irei responder o seu orçamento. Até mais!' : ', all right? I need you to confirm the sending of this message to me by clicking OK, soon I will answer your budget. See you!'; ?>";
                    if(confirm(nome+mensagem)){
                      document.forms["contact-form"].submit();
                    }
                  });

                  $('#project_1').click(function(){
                    $('#img_project').attr('src', 'images/sites.png');
                  });

                  $('#project_2').click(function(){
                    $('#img_project').attr('src', 'images/webmaster_tools.png');
                  });

                  $('#project_3').click(function(){
                    $('#img_project').attr('src', 'images/android_ico.png');
                  });

                  $('#project_0').click(function(){
                    $('#img_project').attr('src', 'images/preferences_system_windows.png');
                  });

                });
              </script>
          </div>

        </div>

      </form>
    </div>
  </div>



<?php include('footer.php'); ?>
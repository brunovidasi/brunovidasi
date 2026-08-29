<?php include('header.php'); ?>
<!-- CONTENT -->

  <div class="banner2">
    <div class="container">
      <div class="row">
        <div class="grid_10 preffix_1">
          <div class="slogan">
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
              <?php echo ($idioma=='pt') ? 'Sou programador, moro no Rio de Janeiro, estou me graduando em Sistemas de Informação e trabalho desenvolvendo sistemas para web há 5 anos.' 
              : 'I am a Web Developer from Rio de Janeiro, Information Systems student and working on developing systems since 5 years ago.'; ?>       
            </p>
            <!-- <div id="claim" class="claim"></div> -->
            <a class="btn-default wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" href="#contacts"><?php echo ($idioma=='pt') ? 'Contato' : 'Contact me'; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="stellar-block wrapper1" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="box2"> 
            <div class="row">
              <div class="grid_7">
                <div class="vimeo-video1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">

                      <div style="text-align:center;">
                        <h2 style="color:white;"><?php echo ($idioma=='pt') ? 'Um pouco dos meus Projetos' : 'A little of my Projects'; ?></h2>
                      </div>

                      <br />

                      <ul class="carrossel">

                        <li>
                          <a href="http://developer.brunovidasi.com/projeto.php?id=1" />
                            <img src='images/sites/camila_site.jpg' alt='<?php echo ($idioma=='pt') ? 'Blog da Camila' : 'Camila\'s Blog'; ?>'/>
                          </a>
                        </li>

                        <li>
                          <a href="http://developer.brunovidasi.com/projeto.php?id=2">
                            <img src='images/sites/ptime_site.png' alt='<?php echo ($idioma=='pt') ? 'ProgrammerTime' : 'ProgrammerTime'; ?>'/>
                          </a>
                        </li>

                        <li>
                          <a href="http://developer.brunovidasi.com/projeto.php?id=3">
                            <img src='images/sites/adventista_site2.png' alt='<?php echo ($idioma=='pt') ? '100% Adventista' : 'Adventist Community'; ?>'/>
                          </a>
                        </li>

                        <li>
                          <a href="http://developer.brunovidasi.com/projeto.php?id=4">
                            <img src='images/sites/timesheet_site.png' alt='<?php echo ($idioma=='pt') ? 'TimeSheet' : 'TimeSheet'; ?>'/>
                          </a>
                        </li>

                      </ul>

                </div>
              </div>
              <div class="grid_5">
                <span class="heading wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><?php echo ($idioma=='pt') ? 'É muito legal ter você por aqui' : 'Glad you are here!'; ?></span>
                <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                  <a href="#contacts">
                    <?php echo ($idioma=='pt') ? 'Quero saber o que você precisa' : 'I want to know what you need'; ?>
                  </a>
                </h3>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <?php echo ($idioma=='pt') ? 'Estou completamente disposto a solucionar o seu problema, desenvolvendo o sistema que você precisa, de forma prática, rápida e segura. Que tal um site moderno, um blog atualizado ou um aplicativo rápido?' 
                  : 'I\'m completely willing to solve your problem, developing the system you need, in a practical, fast and safe. How about a modern website or a quick application?'; ?>
                </p>
                <br /><h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                  <a href="<?php echo ($idioma == 'pt') ? CURRICULO : CV_EN; ?>" target="_blank">
                    <i class="fa fa-download"></i> <?php echo ($idioma=='pt') ? 'Currículo' : 'Curriculum Vitae'; ?>
                  </a></h3>
                <!-- <a class="btn-big wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" href="#">Saiba Mais</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="services" class="hashAncor" style="height: 82px; margin-top: -82px; z-index: -1; position: relative;"></div>
  <div class="wrapper2">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2><?php echo ($idioma=='pt') ? 'O que eu faço?' : 'What do I do?'; ?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="grid_4">
          <div class="box3">
            <div class="heading">
              <img src="images/sites.png" alt="" class="wow rotateIn" data-wow-duration="1.5s" data-wow-delay="0.1s"/>
            </div>
            <div class="content maxheight1">
              <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#"><?php echo ($idioma=='pt') ? 'Web Sites' : 'Websites'; ?></a>
              </h4>
              <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                  <?php echo ($idioma=='pt') ? 'HTML5, CSS3, JavaScript, JQuery, PHP, Joomla!, Design Responsivo e tudo o que a Web tem a me oferecer usando as mais novas tecnologias. ' 
                  : 'HTML5, CSS3, JavaScript, JQuery, PHP, Joomla!, Responsive Design and everything the Web has to offer me using the newest technologies.'; ?>
              </p>
            </div>
            <a class="button" href="#projects"><?php echo ($idioma=='pt') ? 'Veja mais' : 'Read more'; ?></a>
          </div>
        </div>
        <div class="grid_4">
          <div class="box3">
            <div class="heading">
              <img src="images/webmaster_tools.png" alt="" class="wow rotateIn" data-wow-duration="1.5s" data-wow-delay="0.1s"/>
            </div>
            <div class="content maxheight1">
              <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#"><?php echo ($idioma=='pt') ? 'Sistemas Web' : 'Web Systems'; ?></a>
              </h4>
              <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                 <?php echo ($idioma=='pt') ? 'PHP, Orientação a Objetos, CodeIgniter, MySQL, SQLServer, Bootstrap e muito dedo para programar o seu sistema de forma segura e funcional.' 
                  : 'PHP, Object Oriented, CodeIgniter, MySQL, SQLServer, Bootstrap and very willing to program your web system safe and functional.'; ?>
              </p>
            </div>
            <a class="button" href="#projects"><?php echo ($idioma=='pt') ? 'Veja mais' : 'Read more'; ?></a>
          </div>
        </div>
        <div class="grid_4">
          <div class="box3">
            <div class="heading">
              <img src="images/android_ico.png" alt="" class="wow rotateIn" data-wow-duration="1.5s" data-wow-delay="0.1s"/>
            </div>
            <div class="content maxheight1">
              <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <a href="#"><?php echo ($idioma=='pt') ? 'Mobile Apps' : 'Mobile Apps'; ?></a>
              </h4>
              <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <?php echo ($idioma=='pt') ? 'Crio aplicações em Java Standart Edition. Aplicativos para Android e toda a integração possível para o seu sitema em dispositivos portáteis.' 
                  : 'I create applications in Java Standard Edition, Android and all possible integration for your system on portable devices.'; ?>
              </p>
            </div>
            <a class="button" href="#projects"><?php echo ($idioma=='pt') ? 'Veja mais' : 'Read more'; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="stellar-block banner3" data-stellar-background-ratio="0.5">
  </div>
  <div id="projects" class="hashAncor" style="height: 82px; margin-top: -82px; z-index: -1; position: relative;"></div>
  <div class="wrapper3">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="heading1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <h2>
              <?php echo ($idioma=='pt') ? 'Tenho orgulho de dizer que desenvolvi' 
                  : 'I am proud to say that I have developed'; ?>
            </h2>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="grid_12 sistema_logo" style="text-align:center;">
          <a href="http://developer.brunovidasi.com/projeto.php?id=2">
            <img class="photography wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" src="images/sites/ptime_logo.png" alt="Programmer Time" 
                  title="<?php echo ($idioma=='pt') ? 'Programmer Time - Sistema Gerenciador de Projetos de Sistemas de Informação' 
                  : 'Programmer Time - System Project Manager'; ?>"/>
          </a>
        </div>

        <div class="row">

          <div class="grid_4 sistema_logo" style="text-align:center;">
            <a href="http://developer.brunovidasi.com/projeto.php?id=3">
              <img class="photography wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" src="images/sites/adventista_logo.png" alt="100% Adventista" 
                  title="<?php echo ($idioma=='pt') ? '100% Adventista - Site de notícias religiosas' 
                  : '100% Adventista - Site of religious news'; ?>" style="margin-top:40px;"/>
            </a>
          </div>

          <div class="grid_4 sistema_logo" style="text-align:center;">
            <a href="http://developer.brunovidasi.com/projeto.php?id=1">
              <img class="photography wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" src="images/sites/camila_logo.png" alt="Blog da Camila Reis" 
                  title="<?php echo ($idioma=='pt') ? 'Blog da Camila Reis - Jornalismo e Marketing Digital de Moda' 
                  : 'Camila\'s Blog - Journalism and Digital Marketing Fashion'; ?>" style="max-width:160px;"/>
            </a>
          </div>

          <div class="grid_4 sistema_logo" style="text-align:center;">
            <a href="http://developer.brunovidasi.com/projeto.php?id=4">
              <img class="photography wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" src="images/sites/timesheet_logo.png" alt="Timesheet" 
                  title="<?php echo ($idioma=='pt') ? 'Timesheet - Sistema de controle de horas de funcionários' 
                  : 'Timesheet - Employee time control system'; ?>" style="margin-top:40px;"/>
            </a>
          </div>

        </div>

        <?php if($visitante->ip == '200.152.101.167'){ ?>
        <div class="row">

          <div class="grid_4 sistema_logo" style="text-align:center;">
            <a href="http://developer.brunovidasi.com/projeto.php?id=5">
              <img class="photography wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" src="images/sites/vidasi_logo.png" alt="Vidasi" 
                    title="<?php echo ($idioma=='pt') ? 'Vidasi Consultoria em TI - Site Institucional' 
                    : 'Vidasi - Institutional Website'; ?>" style="max-width:250px;"/>
            </a>
          </div>

          <div class="grid_4 sistema_logo" style="text-align:center;">
            <a href="java.php">
              <img class="photography wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" src="images/java.png" alt="Projetos Acadêmicos" 
                    title="<?php echo ($idioma=='pt') ? 'Projetos Acadêmicos' 
                    : 'Academic projects'; ?>" style="max-width:150px;"/>
            </a>
          </div>

          <div class="grid_4 sistema_logo" style="text-align:center;">
            <a href="http://developer.brunovidasi.com/projeto.php?id=6">
              <img class="photography wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" src="images/sites/ptime_site_logo.png" alt="Programmer Time" 
                    title="<?php echo ($idioma=='pt') ? 'Programmer Time - Site Institucional' 
                    : 'Programmer Time - Institutional Website'; ?>" style="max-width:250px;"/>
            </a>
          </div>


        </div>
        <?php } ?>

      </div>
    </div>
  </div>

  <div id="contacts" class="hashAncor" style="height: 82px; margin-top: -82px; z-index: -1; position: relative;"></div>
  <div class="stellar-block banner4" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="heading1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <h2><?php echo ($idioma=='pt') ? 'Fale comigo' : 'Contact me'; ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="grid_12">
          <form id="contact-form" method="post" action="<?php echo BASE_URL; ?>">
            <input type="hidden" name="envio" value="28953" />
            <div class="contact-form-loader"></div>
            <fieldset>
              <div class="row">
                <div class="grid_3">
                  <label class="name wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <input type="text" name="nome" placeholder="<?php echo ($idioma=='pt') ? 'Nome' : 'Name'; ?>" data-constraints="@Required @JustLetters" id="form-name"/>
                    <span class="empty-message">*<?php echo ($idioma=='pt') ? 'Me diga o seu nome' : 'What is your name?'; ?></span>
                  </label>
                </div>
                <div class="grid_3">
                  <label class="email wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                    <input type="text" name="email" placeholder="<?php echo ($idioma=='pt') ? 'E-mail' : 'Email'; ?>" value=""
                           data-constraints="@Required @Email" id="form-email"/>
                    <span class="empty-message">*<?php echo ($idioma=='pt') ? 'É necessário escrever o e-mail' : 'Write your email'; ?></span>
                    <span class="error-message">*<?php echo ($idioma=='pt') ? 'Por favor, insira um e-mail válido' : 'Write a valid email'; ?></span>
                  </label>
                </div>
                <div class="grid_6">
                  <label class="message wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <textarea name="msg" placeholder="<?php echo ($idioma=='pt') ? 'Mensagem' : 'Message'; ?>"
                              data-constraints='@Required @Length(min=20,max=999999)' id="form-msg"></textarea>
                    <span class="empty-message">*<?php echo ($idioma=='pt') ? 'É necessário escrever a mensagem' : 'Write your menssage'; ?></span>
                    <span class="error-message">*<?php echo ($idioma=='pt') ? 'A mensagem é muito curta, talvez você queira me explicar melhor o motivo do contato ;)' : 'The message is too short, you might want to better explain the reason for contacting me'; ?></span>
                  </label>
                </div>
              </div>
              <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
              <div class="contact-form-buttons wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <a href="#" data-type="submit" class="btn-big" id="enviar-orcamento"><?php echo ($idioma=='pt') ? 'Faça um Orçamento' : 'Make a Budget'; ?></a>
                <a href="#" data-type="submit" class="btn-big" id="enviar-email"><?php echo ($idioma=='pt') ? 'Enviar Mensagem' : 'Send Message'; ?></a>
              </div>

              <script>
                $(document).ready(function(){
                  $('#enviar-email').on('click', function(){
                    var nome = $('#form-name').val();
                    var mensagem = "<?php echo ($idioma=='pt') ? ', tudo bem? Eu preciso que você confirme o envio desta mensagem para mim clicando em OK, em breve eu irei te responder. Até mais!' : ', all right? I need you to confirm the sending of this message to me by clicking OK, soon I will answer you. See you!'; ?>";
                    if(confirm(nome+mensagem)){
                      document.forms["contact-form"].submit();
                    }
                  });

                  $('#enviar-orcamento').on('click', function(){
                    var nome = $('#form-name').val();
                    var email = $('#form-email').val();
                    var msg = $('#form-msg').val();
                    window.location = "http://developer.brunovidasi.com/orcamento.php?email="+email+"&nome="+nome+"&msg="+msg;
                  });

                  $('.carrossel').bxSlider({
                      minSlides: 2,
                      maxSlides: 3,
                      slideWidth: 225,
                      slideMargin: 20,
                      controls: true,
                      pager: true,
                      infiniteLoop: true,
                    });
                });
              </script>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

	<div class="modal fade response-message">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
					You message has been sent! We will be in touch soon.
				</div>
			</div>
		</div>
	</div>


<?php include('footer.php'); ?>
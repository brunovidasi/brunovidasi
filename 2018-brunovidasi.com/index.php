<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Bruno Vieira • @brunovidasi</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bruno Vieira">

    <meta name="keywords" content="Bruno Vieira, Bruno, Bruno Vieira da Silva, Bruno Vidasi, brunovidasi, vieira, vieira da silva, brunovidasi.com, brunovida.si, vidasi.com, vidasi, vida si, bruno adventista, bruno, bruno si, bvidasi, desenvolvedor web, programador, programador web, bruno programador, bruno desenvolvedor, programador rio de janeiro, desenvolvedor php, php, desenvolvedor html5, html5, criação de sites">
    <meta name="description" content="Brazilian, software engineer, web developer, pianist, passionate, fake geek and a dreamer. I also love sports, of course.">

    <meta name="google-site-verification" content="0n1i6yENIhCmFAn8gLPTdebr-a__Yv87JZLwsTPsAdQ" />
    <meta name="google-site-verification" content="4yZ1b2NMRtxMHCE4Z_wYrv0dqA6MPCBSpJlgfOoTv-M" />
    <meta name="google-site-verification" content="vpMsRBP4t7irjB4J6PPLm7m-CNkpJ3FMrCEnZ2x72j8" />

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <meta property="og:site_name" content="Bruno Vieira" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bruno Vieira" />
    <meta property="og:url" content="http://brunovida.si" />
    <meta property="og:image" content="http://brunovida.si/img/website.png" />
    <link rel="image_src" href="./img/website.png" />

    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>

    <!-- Custom styles for this template -->
    <link href="css/resume.css" rel="stylesheet">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-43397149-1', 'auto');
      ga('send', 'pageview');
    </script>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">@brunovidasi</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="Bruno Vieira">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
          </li-->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#cv">Resume</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <?php
            # TWITTER #################################################################################
            # OAuth credentials were removed from this public repo.
            require_once('twitter/twitteroauth/twitteroauth.php');

            $consumerKEY        = getenv('TWITTER_CONSUMER_KEY') ?: '';
            $consumerSECRET     = getenv('TWITTER_CONSUMER_SECRET') ?: '';
            $accessTOKEN        = getenv('TWITTER_ACCESS_TOKEN') ?: '';
            $accessTOKENSECRET  = getenv('TWITTER_ACCESS_TOKEN_SECRET') ?: '';

            $qtdTWEET           = 1;
            $user               = 'brunovidasi';

            if (empty($consumerKEY) || empty($consumerSECRET) || empty($accessTOKEN) || empty($accessTOKENSECRET)) {
              $twitter_text = 'Twitter updates unavailable';
            } else {
              $twitter = new TwitterOAuth($consumerKEY, $consumerSECRET, $accessTOKEN, $accessTOKENSECRET);
              $tweets = $twitter->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=$user&count=$qtdTWEET&include_rts=false");
              if(isset($tweets->errors)) {
                $twitter_text = 'No Twitter updates';
              } else {
                $twitter_text = $tweets[0]->text;
              }

              foreach($tweets as $tweet) {
                $twitter_text = $tweet->text;

                if(isset($tweet->entities->user_mentions)) {
                  foreach($tweet->entities->user_mentions as $user)
                    $twitter_text = str_replace('@'.$user->screen_name, '<a href="http://twitter.com/'.$user->screen_name.'" target="_blank">@'.$user->screen_name.'</a>', $twitter_text);
                }

                if(isset($tweet->entities->urls)) {
                  foreach($tweet->entities->urls as $url)
                    $twitter_text = str_replace($url->url, '<a href="'.$url->expanded_url.'" target="_blank">'.$url->display_url.'</a>', $twitter_text);
                }

                if(isset($tweet->entities->media)) {
                  foreach($tweet->entities->media as $media)
                    $twitter_text = str_replace($media->url, '<a href="'.$media->expanded_url.'" target="_blank">'.$media->url.'</a>', $twitter_text);
                }

                if(isset($tweet->entities->hashtags)) {
                  foreach($tweet->entities->hashtags as $hashtag)
                    $twitter_text = str_replace('#'.$hashtag->text.' ', '<a href="https://twitter.com/search?q=%23'.$hashtag->text.'%20from%3A'.$user.'&src=typd" target="_blank">#'.$hashtag->text.'</a> ', $twitter_text);
                }
              }
            }

          />

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">Bruno
            <span class="text-primary">Vieira</span>
          </h1>
          <div class="subheading mb-5">Software Programmer · Full Stack Developer · Sydney, Australia ·
            <a href="mailto:hello@example.com">hello@example.com</a>
          </div>
          <p class="mb-5">IT specialist with over 5 years of experience in planning, designing, testing and implementing systems and processes required to accomplish company projects and objectives.</p>
          <p class="mb-5 twitter_text italic"><a href="http://www.twitter.com/brunovidasi" target="_blank"><i class="fa fa-twitter color-linkedin"></i></a> "<?php echo $twitter_text; ?>"</p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/brunovidasi/?locale=en_US" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/brunovidasi" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.instagram.com/brunovidasi" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.facebook.com/brunovidasi" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="http://www.twitter.com/brunovidasi" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Work Experience</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Junior Developer</h3>
              <div class="subheading mb-3"><span class="text-primary">The Hallway</span> | Sydney, Australia</div>
              <p class="italic">Node.js, Express, Drupal 7, Drupal 8, HTML5, CSS3, Javascript, jQuery, PHP and MySQLi.</p>
              <p>- Software requirements elicitation, analysis, and documentation</p>
              <p>- Development effort estimation</p>
              <p>- Development of applications, software frameworks, and websites according to technical specifications (using PHP, Drupal 7, Drupal 8, and Node.js on the back-end, Javascript, HTML5, and CSS3 on the front-end)</p>
              <p>- Integrations between information systems</p>
              <p>- Assisting with web-based software maintenance, testing, and debugging</p>
              <p>- Writing technical software documentation</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">October 2017 - Present</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Software Programmer</h3>
              <div class="subheading mb-3"><span class="text-primary">SCE Sistemas</span> | Rio de Janeiro, Brazil</div>
              <p class="italic">PHP, XML, HTML5, Json, Javascript, jQuery, CodeIgniter Framework, Open Cart Framework and MySQLi. </p>
              <p>- Software requirements elicitation, analysis, and documentation (focusing on e-commerce systems)</p>
              <p>- Development effort estimation</p>
              <p>- Development of applications, software frameworks, and websites according to technical specifications (using PHP, OpenCart, Laravel, and CodeIgniter on the back-end, Javascript, HTML5, and CSS3 on the front-end)</p>
              <p>- Design and implementation of MySQL databases</p>
              <p>- Implementation of web services (APIs) and integrations between information systems</p>
              <p>- Assisting with web-based software maintenance, testing, and debugging</p>
              <p>- Writing technical software documentation</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">June 2015 - February 2017</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Junior Software Programmer</h3>
              <div class="subheading mb-3"><span class="text-primary">AM4</span> | Rio de Janeiro, Brazil</div>
              <p class="italic">PHP, HTML5, CSS3, Javascript, Json, XML, SOAP Protocol, jQuery, SQL Server, MySQL.</p>
              <p>- Software requirements elicitation, analysis, and documentation</p>
              <p>- Development effort estimation</p>
              <p>- Development of applications, software frameworks, and websites according to technical specifications (using PHP and ASP.NET on the back-end, Javascript, HTML5, and CSS3 on the front-end)</p>
              <p>- Design and implementation of MySQL databases</p>
              <p>- Implementation of web services (APIs) and integrations between information systems</p>
              <p>- Assisting with web-based software maintenance, testing, and debugging</p>
              <p>- Writing technical software documentation</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2014 - May 2015</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Software Development Intern</h3>
              <div class="subheading mb-3"><span class="text-primary">Imaginatto</span> | Rio de Janeiro, Brazil</div>
              <p class="italic">PHP, HTML, CSS, CodeIgniter Framework, Javascript, jQuery, AJAX, Bootstrap, Wordpress, Java, Android, MySQL.</p>
              <p>- Implementation of web-based applications and MySQL databases</p>
              <p>- Programming using the PHP language and CakePHP/CodeIgniter frameworks on the back-end and Javascript, HTML5, and CSS3 on the front-end </p>
              <p>- Participating in all stages of the software development lifecycle (requirements definition and technical design, effort estimation, implementation, testing, and debugging)</p>
              <p>- Assisting with application maintenance (web-based applications and Android apps)s</p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">July 2013 - June 2014</span>
            </div>
          </div>

        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Bachelor of Information Systems</h3>
              <div class="subheading mb-3">Estácio de Sá University - Rio de Janeiro, Brazil</div>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">2012 - 2015</span>
            </div>
          </div>

          <hr />

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h4 class="mb-0">Certificate IV in Project Management</h4>
              <div class="subheading mb-3">Australian Pacific College - Sydney, Australia</div>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">2018 - present</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h4 class="mb-0">Certificate III in Business</h4>
              <div class="subheading mb-3">Australian Pacific College - Sydney, Australia</div>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">2018</span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h4 class="mb-0">Certificate II in Business</h4>
              <div class="subheading mb-3">Australian Pacific College - Sydney, Australia</div>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">2017</span>
            </div>
          </div>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item" title="PHP">
              <i class="devicons devicons-php"></i>
            </li>
            <li class="list-inline-item" title="Node.js">
              <i class="devicons devicons-nodejs"></i>
            </li>
            <li class="list-inline-item" title="React">
              <i class="devicons devicons-react"></i>
            </li>
            <li class="list-inline-item" title="MySql">
              <i class="devicons devicons-mysql"></i>
            </li>
            <li class="list-inline-item" title="HTML5">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item" title="CSS3">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item" title="Javascript">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item" title="jQuery">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item" title="Bootstrap">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item" title="Wordpress">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item" title="CodeIgniter Framework">
              <i class="devicons devicons-codeigniter"></i>
            </li>
            <li class="list-inline-item" title="Magento">
              <i class="devicons devicons-magento"></i>
            </li>
            <li class="list-inline-item" title="Drupal">
              <i class="devicons devicons-drupal"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Software Programmer &amp; Full Stack Developer</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Back-end and Front-end Development</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Database Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              English, Portuguese &amp; Spanish</li>
          </ul>

        </div>
      </section>

      <!--section class="resume-section p-3 p-lg-5 d-flex flex-column" id="projects">
        <div class="my-auto">
        <div class="col">
          <h2 class="mb-5">Projects</h2>

          <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="./img/projects/ptime.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">ProgrammerTime - 2015</h5>
              <p class="card-text">Internal management tool for projects and employees focusing on development of Information Systems. ProgrammerTime® helps you by controlling projects, tasks, clients and employees anywhere in real-time.</p>
              <a href="https://github.com/brunovidasi/programmertime" target="_blank" class="btn btn-primary"><i class="fa fa-external-link"></i> GitHub</a>
            </div>
          </div>
          </div>

        </div>
        </div>
      </section-->

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="cv">
        <div class="my-auto">
          <h2 class="mb-5">Curriculum Vitae</h2>
          <ul class="fa-ul mb-0">
            <li>
              <a href="http://brunovida.si/resume.pdf" target="_blank">
                <i class="fa-li fa fa-file-pdf-o color-red"></i>
                Curriculum Vitae - English
              </a>
            </li>
            <li>
              <a href="http://brunovida.si/curriculo.pdf" target="_blank">
                <i class="fa-li fa fa-file-pdf-o color-red"></i>
                Curriculum Vitae - Português
              </a>
            </li>
            <li><br /></li>
            <li>
              <a href="https://www.linkedin.com/in/brunovidasi/?locale=en_US" target="_blank">
                <i class="fa-li fa fa-linkedin color-linkedin"></i>
                Linkedin Profile
              </a>
            </li>
            <li>
              <a href="https://github.com/brunovidasi" target="_blank">
                <i class="fa-li fa fa-github color-linkedin"></i>
                GitHub Account
              </a>
            </li>
            <li>
              <a href="mailto:contact@brunovidasi.com">
                <i class="fa-li fa fa-envelope color-linkedin"></i>
                contact@brunovidasi.com
              </a>
            </li>
          </ul>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>

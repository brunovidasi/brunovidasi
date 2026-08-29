  <div class="wrapper5">
    <div class="container">
      <div class="row">

        <?php
            # Twitter API credentials were removed from this public repo.
            # Configure them in the host environment if this site is deployed privately.
            require_once('twitter/twitteroauth/twitteroauth.php');

            $consumerKEY        = getenv('TWITTER_CONSUMER_KEY') ?: '';
            $consumerSECRET     = getenv('TWITTER_CONSUMER_SECRET') ?: '';
            $accessTOKEN        = getenv('TWITTER_ACCESS_TOKEN') ?: '';
            $accessTOKENSECRET  = getenv('TWITTER_ACCESS_TOKEN_SECRET') ?: '';

            $qtdTWEET           = 1;
            $user               = TWITTERID;

            if (empty($consumerKEY) || empty($consumerSECRET) || empty($accessTOKEN) || empty($accessTOKENSECRET)) {
                $texto_twitter = 'Twitter updates unavailable';
                $link = 'https://twitter.com/' . $user;
            } else {
                $twitter = new TwitterOAuth($consumerKEY, $consumerSECRET, $accessTOKEN, $accessTOKENSECRET);
                $tweets = $twitter->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=$user&count=$qtdTWEET&include_rts=false");
                if (isset($tweets->errors)) {
                    $texto_twitter = 'Sem atualizações no Twitter';
                    $link = 'https://twitter.com/' . $user;
                } else {
                    $texto_twitter = $tweets[0]->text;
                    $link = 'https://twitter.com/' . $user;
                }
            }
        ?>

        <div class="grid_3">
          <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"></h3>
          <div class="post1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <a href="<?php echo FACEBOOK; ?>" target="_blank"><img src="images/avatar.jpg" style="border-radius: 50%;"/></a>
            <!-- http://graph.facebook.com/<?php echo FACEBOOKID; ?>/picture?type=large -->
            <?php
              // $json = file_get_contents("https://graph.facebook.com/".FACEBOOKID."?fields=cover");
              // $obj = json_decode($json);
              // $cover = $obj->cover->source;
            ?>
            <!-- <a href="<?php echo FACEBOOK; ?>"><img src="<?php echo $cover; ?>" /></a> -->
          </div>

        </div>

        <div class="grid_6">

          <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"></h3>
        <?php foreach($tweets as $tweet){ ?>
            <div class="tweet" id="tweet_<?php echo $tweet->id; ?>">
                <div class="item_content">

           			<h5 class="blockquote wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="color:#0077bb; font-size: 14px;">
                      <a href="https://twitter.com/<?php echo $tweet->user->screen_name; ?>/status/<?php echo $tweet->id; ?>" target="_blank">
                        <?php 
                        	echo ($idioma == 'pt') ? date("d/m/Y H:i", strtotime($tweet->created_at)) : date("Y-m-d H:i", strtotime($tweet->created_at)); 
                        ?>
                      </a>
                    </h5>

                    <?php
						$texto = $tweet->text;

						foreach($tweet->entities->user_mentions as $user)
							$texto = str_replace('@'.$user->screen_name, '<a href="http://twitter.com/'.$user->screen_name.'" target="_blank">@'.$user->screen_name.'</a>', $texto);

						foreach($tweet->entities->urls as $url)
							$texto = str_replace($url->url, '<a href="'.$url->expanded_url.'" target="_blank">'.$url->display_url.'</a>', $texto);
                    ?>

                    <h5 class="blockquote wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><?php echo $texto; ?></h5>

                    <span id="cloak80368">
                        <h5 class="blockquote wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="color:#0077bb;">
                          <a href="https://twitter.com/<?php echo $tweet->user->screen_name; ?>" target="_blank">
                            <?php echo $tweet->user->name; ?> - <small>@<?php echo $tweet->user->screen_name; ?></small>
                          </a>
                        </h5>
                    </span>

                </div>
            </div>
        <?php } ?>

        </div>

        <div class="grid_3">
          <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"></h3>
          <ul class="socials2">

            <li class="wow rotateIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <a href="<?php echo FACEBOOK; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>

            <li class="wow rotateIn" data-wow-duration="1s" data-wow-delay="0.3s">
              <a href="<?php echo INSTAGRAM; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>

            <li class="wow rotateIn" data-wow-duration="1s" data-wow-delay="0.4s">
              <a href="<?php echo TWITTER; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>

            <li class="wow rotateIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <a href="<?php echo LINKEDIN; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>

            <li class="wow rotateIn" data-wow-duration="1s" data-wow-delay="0.6s">
              <a href="<?php echo GOOGLEPLUS; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
            </li>

            <li class="wow rotateIn" data-wow-duration="1s" data-wow-delay="0.7s">
              <a href="mailto:<?php echo ($idioma == 'pt') ? EMAIL : EMAIL_EN;?>" target="_blank"><i class="fa fa-envelope"></i></a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<footer id="footer">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="grid_12">
          <div class="privacy-block wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <a href="index.php">BRUNOVIDASI</a> &copy; 2013 - <span id="copyright-year"></span> <?php echo ($idioma=='pt') ? 'Todos os direitos reservados' : 'All rights reserved'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="js/script.js"></script>

</body>

</html>
<?php get_header() ?>

  <div class="container-fluid">
    <div class="row">
      <div class="container bg1-space bg1 bg1-height">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light pt-4">
          <a class="navbar-brand" href="#"><span class="font-weight-bold">Interactive</span>Agency</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mr-auto"></div><!-- div vide pour le positionnement à droite -->
            <div class="my-2 my-lg-0">
              <ul class="navbar-nav mr-auto text-small">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Offer</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link badge-contact" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="clear2"></div>

        <!-- text header -->
        <div class="text-center">
          <p class="lead-text1">Lorem ipsum dolor sit amet</p>
          <p class="text-very-small text-muted" style="margin-top:-20px;">
            Nunc vel nibh tempor, pharetra lectus congre, luctus orci.
          </p>
        </div>

        <div class="clear1"></div>

        <div class="text-center">
          <a href="#" class="myButton">Ask for price</a>
        </div>

        <div class="clear3"></div>

        <div class="text-center">
          <p class="mt-5 text-center text-white text-very-small">
            <i class="fas fa-mouse fa-2x"></i>
            <br>
            Scrool down
          </p>
        </div>

        <div style="padding-top:100px;">&nbsp;</div>

      </div>
    </div>
  </div>

  <!-- Best design/ Best code section -->
  <div class="container">
    <div class="row">
      <div id="bestdesign" class="col-sm-12 col-md-6 m-0 p-0 w-100 h-75">
        <div class="paddingbestdesign text-light">

          <?php if (have_posts()) :
                   the_post();?>
          <p class="title1 post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
          <small><?php the_time('F jS, Y') ?> <?php the_author() ?> </small>

          <?php
                    the_excerpt();

                  endif;
                  ?>

          <!-- <p class="title1">Best<b>Design</b></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
          <a href="#" class="myButton">Ask for price</a> -->
        </div>
      </div>
      <div id="bestcode" class="col-sm-12 col-md-6 m-0 p-0 w-100 h-75">
        <div class="paddingbestcode text-light">

          <?php if (have_posts()) :
                   the_post();?>
          <p class="title1 post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
          <small><?php the_time('F jS, Y') ?> <?php the_author() ?> </small>

          <?php
                    the_excerpt();

                  endif;
                  ?>
          <!-- <p class="title1">Best<b>Code</b></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
          <a href="#" class="myButton">Ask for price</a> -->
        </div>
      </div>
    </div>
  </div>

  <!-- What we do section -->
  <div id="whatwedo" class="container">

    <div class="row">
      <div class="col-sm-12">
        <p class="lead-text1 text-center pt-5 pb-4">What we do?</p>
      </div>
      <div class="col-sm-12 col-md-6 m-0 p-0 w-100 h-75">
        <div class="paddingwhatwedoleft">
          <i class="fas fa-file-signature fa-3x float-left m-3 text-muted"></i>
          <p class="lead-text2">Web design</p>
          <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 m-0 p-0 w-100 h-75">
        <div class="paddingwhatwedoright">
          <i class="fas fa-laptop fa-3x float-left m-3 text-muted"></i>
          <p class="lead-text2">Web applications</p>
          <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-6 m-0 p-0 w-100 h-75">
        <div class="paddingwhatwedoleft">
          <i class="fas fa-file-image fa-3x float-left m-3 text-muted"></i>
          <p class="lead-text2">Digital painting</p>
          <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 m-0 p-0 w-100 h-75">
        <div class="paddingwhatwedoright">
          <i class="fas fa-desktop fa-3x float-left m-3 text-muted"></i>
          <p class="lead-text2">Desktop applications</p>
          <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-sm-12 pt-1 pb-5 w-100 h-75 text-center">
        <a href="#" class="myButton">Ask for price</a>
      </div>
    </div>
  </div>

  <!-- Porfolio section -->
  <div class="container">
    <div class="row">
      <div class="col m-0 p-0">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Portfolio/Layer12.jpeg" alt="portfolio1">
      </div>
      <div id="portfolio-darken" class="col m-0 p-0">
        <p class="text-white text-center porfolio-resp-font1 pt-5 pb-1">Netptune Template</p>
        <p class="porfolio-resp-font2 text-white text-center pb-1">Alliquam sagittis neque in lectus semper, nec elementus<br> aecuscelerisque. Curabitur ullamcorper auctor mauris,<br>placera fermentum.</p>
        <p class="text-center"><a href="#" class="myButton">Ask for price</a></p>
      </div>
      <div class="col m-0 p-0">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Portfolio/Layer13.jpeg " alt="portfolio2">
      </div>
    </div>
  </div>

  <!-- About us -->
  <div class="container">
    <div class="row">
      <div id="aboutus" class="col-sm-12">
        <p class="text-white lead-text1 text-center pt-5 pb-1">About us!</p>
        <p class="text-small text-muted text-center pb-5">Alliquam sagittis neque in lectus semper, nec elementus aecuscelerisque. Curabitur ullam-<br>corper auctor mauris, placera fermentum.</p>
        <div class="row text-center photos">
          <div class="col">
            <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/About/Layer16.jpeg" alt="John Doe"><br>
            <span class="text-white">John Doe</span>
            <p class="text-small text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="col">
            <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/About/Layer17.jpeg" alt="John Doe"><br>
            <span class="text-white">John Doe</span>
            <p class="text-small text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="col">
            <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/About/Layer18.jpeg" alt="John Doe"><br>
            <span class="text-white">John Doe</span>
            <p class="text-small text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <div class="col">
            <img class="img-fluid rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/About/Layer19.jpeg" alt="John Doe"><br>
            <span class="text-white">John Doe</span>
            <p class="text-small text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
        </div>
        <div class="col-sm-12 pt-1 pb-5 w-100 h-75 text-center mt-5 mb-4">
          <a href="#" class="myButton">Watch more</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Map -->
  <div class="container">
    <div class="row">
      <div id="map" class="col-sm-12">
        <p class="text-center">
          <i id="location" class="fas fa-map-marker-alt fa-2x"></i>
        </p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="container">
    <div class="row">
      <div id="footer" class="col-sm-12">
        <p class="text-center">
        <p class="text-tiny text-center">Cum sociis natoque penatibus et magnis dis parturient montes, nasceture ridiculus mus.<br>
          Try awesome tools for designers <b>symu.co</b>
        </p>
      </div>
    </div>
  </div>

<?php
include "insert.php";
 ?>
  <!-- <form class="Newsletter" action="#" method="post">
    <h5 id="identity"> Identité </h5>
    <input id="forname" name="forname" type="text" placeholder="Prénom(s)" style="width:12rem; height:auto;" required></label>
    <input id="name" name="name" type="text" placeholder="Nom" style="width:12rem; height:auto;" required></label>

  <h5 id="email"> Email </h5>
  <input id="email" name="email" type="email" placeholder="Veuillez rentrer une adresse e-mail valide" style="width:24rem; height:auto;" required></label>
  <input name="submit" type="submit" value="Envoyer">
  </form> -->


  <div class="newsletter">
    <div class="overlay-news"></div>
      <h3> Inscrivez vous à notre newsletter </h3>
      <p> Pour pouvoir suivre toutes les dernières actualités d'InteractiveAgency, abonnez vous à notre newsletter.
  </div>

  <div class="tnp tnp-subscription">
  <form method="post" action="http://localhost/wmaunier/wordpress/?na=s" onsubmit="return newsletter_check(this)">

  <input type="hidden" name="nlang" value="">
  <div class="tnp-field tnp-field-firstname"><label>Prénom(s)</label><input class="tnp-firstname" type="text" name="nn" required></div>
  <div class="tnp-field tnp-field-lastname"><label>Nom </label><input class="tnp-lastname" type="text" name="ns" required></div>
  <div class="tnp-field tnp-field-email"><label>Email</label><input class="tnp-email" type="email" name="ne" required></div>
  <div class="tnp-field tnp-privacy-field"><label><input type="checkbox" name="ny" required class="tnp-privacy"> En continuant, vous acceptez la politique de confidentialité</label></div><div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="S'inscrire" >
  </div>
  </form>
  </div>



  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php get_footer() ?>

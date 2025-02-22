<?php
  include 'dbh.inc.php';
  include 'comments.inc.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script
    ><![endif]-->
  <title>Salon Matin</title>
  <meta name="keywords" content="haircut, hair salon, salon matin, cheap haircut aarhus, cheap haircut, trendy haircut, most popular hair salon in aarhus among internationals"/>
  <meta name="description" content="Salon Matin is a hair salon in aarhus center, providing haircuts and beard trims/shaves for a cheap price" />
  <link rel="stylesheet" href="https://use.typekit.net/ttr3wco.css" />
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <script src="https://kit.fontawesome.com/3abf1a5f0c.js" crossorigin="anonymous"></script>


</head>

<body>

  <header class="header">
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper">
         <a href="https://www.facebook.com/salonmatin?fref=ts"><img src="img/facebook.svg" class="SomeIconM1" alt="Facebook icon"> </a><a href="https://www.instagram.com/salon_matin/"><img src="img/instagram.svg" class="SomeIconM2" alt="Instagram icon"></a>
         <a href="#video" class="brand-logo"><img src="img/logo-smatin1.svg" alt="Salon Matin logo"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><img src="img/navigation.svg" alt="Navigation logo"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#prices_services">PRICES & SERVICES</a></li>
            <li><a href="#gallery_reviews">GALLERY & REVIEWS</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a class="waves-effect waves-light btn" href="http://karoinaz.eu/advanced/">Booking</a></li>
          </ul>
        </div>

      </nav>
    </div>

    <ul class="sidenav" id="mobile-demo">
      <li><a href="#contact">CONTACT</a></li>
      <li><a href="#prices_services">PRICES & SERVICES</a></li>
      <li><a href="#gallery_reviews">GALLERY & REVIEWS</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a class="waves-effect waves-light btn" href="http://karoinaz.eu/advanced/">Booking</a></li>
    </ul>
  </header>
  <!-- .header-->

  <main class="content">
    <!-- Video Section-->
    <section id="video">

      <video class="responsive-video" muted autoplay loop>
        <source src="video/salonMatin2.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <div id="videoLogo" class="row">
        <div class="col l8 offset-l4"><img class="videoLogo show-on-large" src="img/logo-smatin.png" alt="Salon Matin logo"></div>
        <div class="col l6 s12 offset-l3 textMargin">
          <h2>Here at Salon Matin we make sure to give the best services at an affordable price</h2>
          <a class="waves-effect waves-light btn-large" href="http://karoinaz.eu/advanced/">Booking</a>
          <a class="waves-effect waves-light btn" id="smallBtn" href="http://karoinaz.eu/advanced/">Booking</a>
          <a href="https://www.facebook.com/salonmatin?fref=ts"><img src="img/facebook.svg" class="SomeIcon" alt="Facebook icon"> </a><a href="https://www.instagram.com/salon_matin/"><img src="img/instagram.svg" class="SomeIcon2" alt="Instagram icon"></a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="row">
        <div class="col s12 l4">
          <div class="card">
            <div class="card-content">
              <span class="card-title">BOOK VIA PHONE</span>
              <p>
                <br>
                +45 86 19 44 09
                <br>

              </p>
            </div>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="card card_border">
            <div class="card-content">
              <span class="card-title">ADDRESS</span>
              <p>
                <br>
                <br>
                Frederiks allé 176
                8000 Århus C
                <br>
                <br>
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="card">
            <div class="card-content">
              <span class="card-title">OPENING HOURS</span>
              <p>
                Monday - Friday 9:30 - 18 <br>
                Saturday 9:00 - 14 <br>
                Sunday closed <br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Prices & Services Section -->
    <section id="prices_services">
      <h1>PRICES & SERVICES</h1>
      <div class="row">
        <!-- Card machine haircut -->
        <div class="col s12 l6">
          <div class="card horizontal">
            <div class="card-image">
              <img class="img_services" src="img/razor.png" alt="Machine">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">HAIRCUT WITH THE MACHINE</span>
              </div>
              <div class="card-action">
                <p>100 kr</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Card machine and sccissors haircut -->
        <div class="col s12 l6">
          <div class="card horizontal">
            <div class="card-image">
              <img class="img_services" src="img/hair.png" alt="Men hair">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">MACHINE & SCISSORS</span>
              </div>
              <div class="card-action">
                <p>120 kr</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Card sccissors haircut -->
        <div class="col s12 l6">
          <div class="card horizontal">
            <div class="card-image">
              <img class="img_services" src="img/scrissors.png" alt="Scissors">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">HAIRCUT WITH THE SCISSORS</span>
              </div>
              <div class="card-action">
                <p>150 kr</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Card sccissors haircut -->
        <div class="col s12 l6">
          <div class="card horizontal">
            <div class="card-image">
              <img class="img_services" src="img/woman.png" alt="Woman hair">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">WOMEN HAIRCUT</span>
              </div>
              <div class="card-action">
                <p>200 kr</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Card sccissors haircut -->
        <div class="col s12 l6">
          <div class="card horizontal">
            <div class="card-image">
              <img class="img_services" src="img/yellow_razor.png" alt="Razor">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">BEARD TRIM & BARBERING</span>
              </div>
              <div class="card-action">
                <p>50 kr</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Card sccissors haircut -->
        <div class="col s12 l6">
          <div class="card horizontal">
            <div class="card-image">
              <img class="img_services" src="img/kid.png" alt="Kids hair">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <span class="card-title">CHILDREN HAIRCUT</span>
              </div>
              <div class="card-action">
                <p>100 kr</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Gallery & Reviews Section -->
    <section id="gallery_reviews">
      <h1>GALLERY & REVIEWS</h1>

      <div class="row container_gallery">
        <div class="col s12 m6 l4">
          <img src="img/gallery1.jpg" class="responsive-img card materialbox" alt="Making a fade">
        </div>
        <div class="col s12 m6 l4">
          <img src="img/gallery2.jpg" class="responsive-img card materialbox" alt="Barbers tools">
        </div>
        <div class="col s12 m6 l4">
          <img src="img/gallery3.jpg" class="responsive-img card materialbox" alt="Beard shave">
        </div>
        <div class="col s12 m6 l4">
          <img src="img/gallery4.jpg" class="responsive-img card materialbox" alt="Shave">
        </div>
        <div class="col s12 m6 l4">
          <img src="img/gallery5.jpg" class="responsive-img card materialbox" alt="Haircut example">
        </div>
        <div class="col s12 m6 l4">
          <img src="img/gallery6.jpg" class="responsive-img card materialbox" alt="Haircut example">
        </div>
        <div class="col s12 m6 l4">
          <img src="img/gallery7.jpg" class="responsive-img card materialbox" alt="Haircut example">
        </div>
        <div class="col s12 m6 l4">
          <?php
          echo "<div class='cards cardsForm'>";
          getComments($conn);
          echo "</div>";
          ?>
        </div>
        <div class="col s12 m6 l4">
          <?php
          /* Created a form for writing a comment */
          echo "<h1 class='review-person'>";
          echo "Write your review";
          echo "</h1>";
          echo "<form method='post' action='".setComments($conn)."' class='cardsForm' id='reviewForm'>
            <p class='placeholder'>Your name</p>
            <input name='uid' value='' class='fields'/>
            <br>
            <p class='placeholder'>Your review</p>
            <textarea name='message' rows='8' cols='80' class='fields2'></textarea>
            <br>
            <button name='commentSubmit' type='submit' class='post'>Post review</button>
          </form>";
          ?>
        </div>
      </div>

      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide1">
          </div>
          <div class="swiper-slide slide2">
          </div>
          <div class="swiper-slide slide3">
          </div>
          <div class="swiper-slide slide4">
          </div>
          <div class="swiper-slide slide5">
          </div>
          <div class="swiper-slide slide6">
          </div>
          <div class="swiper-slide slide7">
          </div>
          <div class="swiper-slide slide8">
          </div>
        </div>
        <div class="swiper-pagination">
        </div>
        <div class="swiper-button-next swiper-button-white">
        </div>
        <div class="swiper-button-prev swiper-button-white">
        </div>


      </div>
      <?php
      /* Created a form for writing a comment */
      echo "<div class='mob-review'>";
      echo "<div class='cards cardsForm'>";
      getComments($conn);
      echo "</div>";
      echo "<h1 class='review-person'>";
      echo "Write your review";
      echo "</h1>";
      echo "<form method='POST' action='".setComments($conn)." class='cardsForm' id='reviewForm'>
        <p class='placeholder'>Your name</p>
        <input name='uid' value='' class='fields'/>
        <br>
        <p class='placeholder'>Your review</p>
        <textarea name='message' rows='8' cols='80' class='fields2'></textarea>
        <br>
        <button name='commentSubmit' type='submit' class='post'>Post review</button>
      </form>";
      echo "</div>";
      ?>
    </section>

    <!-- About Section -->
    <section id="about">
      <article id="about_company">
        <h1 class="aboutC">ABOUT COMPANY</h1>
        <div class="row">
        <div class="col l7 s12 pleaseNoPadding image-smaller"><img src="img/company.png" alt="Owners" id="company"></div>
        <div class="col l5 s12"><h3 id="goodService">GOOD SERVICE WITH REASONABLE PRICE!</h3>
        <p id="descr">Salon MATIN in Århus C is centrally located on Frederiks Allé 176. That is, you can easily
          and quickly take public transport right to your door. We have bicycle parking and if you are
          in the car there is ample opportunity for free parking close to Salon MATIN. <br><br>
          We offer men's, women's and children's haircuts, and strive to provide the best service by
          listening to your wishes, and are happy to make suggestions for the haircut. <br><br>Our greatest reward
          is the joy our customers exude as they leave the salon with a result they are happy and proud of.
          Salon MATIN is a cheap hairdresser in Aarhus and the quality is always top notch.<br><br>
          In addition to cutting, we also offer various hair products including ID Wax as well as Attitude Wax.
          If you are looking for a good cheap hairdresser at Frederiksbjerg in the heart of Aarhus, and
          want high quality and professional treatment, you are very welcome to <a id="contactUs" href="#contact">contact us</a>.
        </p></div>
        </div>
      </article>
      <article id="about_hairdressers">
        <h1>OUR HAIRDRESSERS</h1>
        <div class="row hairdresser_desktop">
          <div class="col m4 l4">
            <div class="card">
              <div class="card-image">
                <img src="img/thaer.jpg" alt="Thaer">
              </div>
              <div class="card-content">
                <span class="card-title">Thaer Alwan</span>
                <h5>Founder</h5>
                <p>Specialized in scissors</p>
              </div>
            </div>
          </div>
          <div class="col m4 l4">
            <div class="card">
              <div class="card-image">
                <img src="img/montazer.jpg" alt="Montazer">
              </div>
              <div class="card-content">
                <span class="card-title">Montazer Alwan</span>
                <h5>COFounder</h5>
                <p>Specialized in skinfades</p>
              </div>
            </div>
          </div>
          <div class="col m4 l4">
            <div class="card">
              <div class="card-image">
                <img src="img/murad.jpg" alt="Murad">
              </div>
              <div class="card-content">
                <span class="card-title">Murad AlGezir</span>
                <h5>Hairdresser</h5>
                <p>Specialized in barbering</p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide slide9"><div class="mobileText"><h3 class="slider_mobile">Thaer Alwan</h3>
              <h5>Founder</h5>
              <p>Specialized in scissors</p>
            </div>
              </div>
            <div class="swiper-slide slide10"><div class="mobileText">
              <h3 class="slider_mobile">Montazer Alwan</h3>
              <h5>COFounder</h5>
              <p>Specialized in skinfades</p>
                </div></div>
            <div class="swiper-slide slide11"><div class="mobileText">
              <h3 class="slider_mobile">Murad AlGezir</h3>
              <h5>Hairdresser</h5>
              <p>Specialized in barbering</p>
                </div></div>
          </div>
          <div class="swiper-pagination">
          </div>
          <div class="swiper-button-next swiper-button-white">
          </div>
          <div class="swiper-button-prev swiper-button-white">
          </div>
        </div>

      </article>
    </section>

    <!-- Where to find us Section -->
    <section id="booking">
      <h1 id="findUs">WHERE YOU CAN FIND US</h1>
      <div id="map"></div>
    </section>

    <!-- Booking Section -->
    <section id="booking"></section>

  </main>
  <!-- .content -->

  <footer>
    <div class="row">
      <div class="column">
        <h2 class="heading2">BOOK VIA PHONE</h2>
        <p class="paragraph">+45 86 19 44 09</p>
      </div>
      <div class="column">
        <h2 class="heading2">ADDRESS</h2>
        <p class="paragraph">Frederiks allé 176
        <br>
        8000 Århus C</p>
      </div>
      <div class="column" style="border-right:none">
        <h2 class="heading2">OPENING HOURS</h2>
        <p class="work-hours paragraph">Monday - Friday 9:30 - 18 <br>
        Saturday 9:00 - 14 <br>
        Sunday closed <br></p>
      </div>
    </div>
    <p class="copy paragraph">Copyright - Salon Matin 2019</p>
  </footer>
  <!-- .footer -->

  <!-- .wrapper -->

  <script src="https://unpkg.com/swiper/js/swiper.js"></script>
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/script.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKzdWQBvqNehNIKmENp9FLCHz6zDf9tcM&callback=initMap">
  </script>
</body>

</html>

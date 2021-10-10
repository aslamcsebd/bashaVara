<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>House Rent</title>
  <link rel="stylesheet" href="./asset/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./asset/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="./asset/css/style.css">
</head>

<body>

  <header class="header">
    <nav class="navbar navbar-expand-lg header__navbar fixed-top">
      <div class="container">
        <div class="company__logo">
          <a class="navbar-brand header__navbar-brand" href="index.php">
            <img src="./asset/image/main--logo.png" class="img-fluid company--image" alt="">

          </a>
        </div>
        <button class="navbar-toggler ml-auto header__navbar-toggler" type="button" data-toggle="collapse"
          data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <div class="toggler-icon" id="nav-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
        <div class="collapse navbar-collapse header__navbar-collapse" id="mainNav">
          <ul class="navbar-nav header__navbar-nav ml-auto">
            <div class="header__mobile--nav">
              <li class="nav-item header__nav-icon">
                <a class="nav-link header__nav-link-icon" href=""><img src="./asset/image/android.png" class="img-fluid"
                    alt=""></a>
              </li>

             <!--  <li class="nav-item header__nav-item">
                <a class="nav-link header__nav-link" href="login.htm">Login</a>
              </li> -->

              <li class="nav-item header__nav-item">
                <a class="nav-link header__nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item header__nav-item">
                <a class="nav-link header__nav-link" href="logout.php">Logout</a>
              </li>
                 <li class="nav-item header__nav-item">
                <a class="nav-link header__nav-link" href="add-list.php">View room</a>
              </li>


              <li class="nav-item header__nav-item">
                <a class="nav-link header__nav-link" href="#"><span>Help</span><span><i
                      class="fas fa-question-circle"></i></span></a>
              </li>
            </div>
          </ul>
        </div>
      </div>


    </nav>
  </header>


  <!-- USER PROFILE SECTION -->
  <section class="user_profile--section">
    <div class="container">
      <div class="user__content">
        <div class="row">
          <div class="col-md-8 user__content--col-1">
            <div class="profile__content-box">
             <div class="price__hour">
              <p class="active--status"><span>4 minutes ago</span><span class="badge badge-secondary">New</span></p>
              <p>
                <span>$</span>
                <span>721</span>
                <span>USD</span>
                <span>per month</span>
              </p>
            
            </div>
              <p><span>New Listing</span></p>
              
              <p><span><i class="fas fa-map-marker-alt"></i></span><span>Location</span></p>
              <p><span>Chittagong, </span><span>Bangladesh</span></p>

              <p><span>Move-in Date</span></p>
              <p><span>Immediately</span></p>

              <p><span>Roommate preference</span></p>
              <p><span>Age: 18 - 99</span></p>
            </div>
          </div>

          <div class="col-md-4 user__content--col-2">
            <div class="message__content">
              <div class="user_img">
                <img src="./asset/image/user.jpg" class="img-fluid" alt="">
                <p class="name--user">
                  <a href="listing-user.htm">
                    <span><?php echo $_SESSION['userName']; ?></span>
                  </a>
                </p>
                <p class="spent--times"><span>24</span></p>
                <p class="type--room"><span>Looking for a private room</span></p>
              </div>
              <div class="message--send">
                <form action="">
                  <textarea class="form-control" rows="7" placeholder="Write a message to..." required></textarea>
                  <button class="btn btn-outline-info btn-lg btn-block btn--send-message" type="submit">Send
                    Message</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <footer class="footer">
    <div class="container">
      <div class="footer__company--logo">
        <img src="./asset/image/main--logo.png" class="img-fluid company--image" alt="">
      </div>
      <div class="footer__content--box">
        <div class="footer__content">
          <ul>
            <li><a href="">Press</a></li>
            <li><a href="">Roomster Team</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Sitemap</a></li>
          </ul>

          <ul>
            <li><a href=""><span><i class="fab fa-facebook-f"></i></span></a></li>
            <li><a href=""><span><i class="fab fa-twitter"></i></span></a></li>
            <li><a href=""><span><i class="fab fa-instagram"></i></span></a></li>
          </ul>
        </div>

        <div class="footer__content">
          <ul>
            <li><a href="">Mailbox</a></li>
            <li><a href="">Megaphone</a></li>
            <li><a href="">Bookmarks</a></li>
            <li><a href="">24/7 support</a></li>
            <li><a href="">Settings</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <ul>
            <li><a href="">Tutorial</a></li>
            <li><a href="">Help Center</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Fair Housing</a></li>
            <li><a href="">Affiliate Program</a></li>
            <li><a href="">Reviews</a></li>

          </ul>
        </div>
      </div>

      <div class="footer__content--top-cities">
        <div class="heading--footer_cities">
          <h4><span>Top Cities</span></h4>
        </div>

        <div class="footer__cities--menu">
          <p>

            <a href="">
              <span>Amsterdam</span>

            </a>
            <a href="">
              <span>Athens</span>

            </a>
            <a href="">
              <span>Atlanta</span>

            </a>
            <a href="">
              <span>Austin</span>

            </a>
            <a href="">
              <span>Baltimore</span>

            </a>
            <a href="">
              <span>Bangkok</span>

            </a>
            <a href="">
              <span>Barcelona</span>

            </a>
            <a href="">
              <span>Berlin</span>

            </a>
          </p>

          <p>

            <a href="">
              <span>Boston</span>

            </a>
            <a href="">
              <span>Chicago</span>

            </a>
            <a href="">
              <span>Copenhagen</span>

            </a>
            <a href="">
              <span>Dallas</span>

            </a>
            <a href="">
              <span>Delhi</span>

            </a>
            <a href="">
              <span>Denver</span>

            </a>
            <a href="">
              <span>Dubai</span>

            </a>
            <a href="">
              <span>Essen, Düsseldorf</span>

            </a>
          </p>


          <p>

            <a href="">
              <span>Houston</span>

            </a>
            <a href="">
              <span>Istanbul</span>

            </a>
            <a href="">
              <span>Jakarta</span>

            </a>
            <a href="">
              <span>Johannesburg</span>

            </a>
            <a href="">
              <span>Kiev</span>

            </a>
            <a href="">
              <span>Las Vegas</span>

            </a>
            <a href="">
              <span>London</span>

            </a>
            <a href="">
              <span>Los Angeles</span>

            </a>
          </p>

          <p>

            <a href="">
              <span>Madrid</span>

            </a>
            <a href="">
              <span>Manila</span>

            </a>
            <a href="">
              <span>Melbourne</span>

            </a>
            <a href="">
              <span>Mexico City</span>

            </a>
            <a href="">
              <span>Miami</span>

            </a>
            <a href="">
              <span>Moscow</span>

            </a>
            <a href="">
              <span>Mumbai</span>

            </a>
            <a href="">
              <span>Naples</span>

            </a>

          </p>

          <p>

            <a href="">
              <span>New York City</span>

            </a>
            <a href="">
              <span>Orlando</span>

            </a>
            <a href="">
              <span>Osaka, Kobe, Kyoto</span>

            </a>
            <a href="">
              <span>Paris</span>

            </a>
            <a href="">
              <span>Philadelphia</span>

            </a>
            <a href="">
              <span>Portland</span>

            </a>
            <a href="">
              <span>Rome</span>

            </a>

          </p>
        </div>
      </div>

      <div class="footer__link--content">
        <div class="info--footer_text">
          <p><span>Download Roomster App</span></p>
        </div>
        <div class="footer__images--content">
          <div class="images--footer">
            <a href=""><img src="./asset/image/footer-1.png" class="img-fluid" alt=""></a>
          </div>
          <div class="images--footer">
            <a href=""><img src="./asset/image/footer-2.png" class="img-fluid" alt=""></a>
          </div>
          <div class="images--footer">
            <a href=""><img src="./asset/image/footer-3.png" class="img-fluid" alt=""></a>
          </div>
        </div>
      </div>


      <div class="footer__last-content--box">
        <div class="footer__last-content">
          <p><span>Basavaraa &copy; 2020</span></p>
        </div>

        <div class="footer__last-content">
          <a href="">
            <span>Terms of use</span>
          </a>
        </div>

        <div class="footer__last-content">
          <a href="">
            <span>Privacy Policy</span>
          </a>
        </div>
      </div>
    </div>
  </footer>


  <!--======================= All Javascript file ========================-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="./asset/js/owl.carousel.min.js"></script>
  <script src="./asset/js/bootstrap.min.js"></script>
  <script src="./asset/js/script.js"></script>


</body>

</html>
<?php 
   session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Basavaraa | Log in</title>
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
                <a class="nav-link header__nav-link" href="signup.php">Sign Up</a>
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


  <!-- LOGIN CONTENT SECTION -->
  <section class="login--section">
    <div class="container">

      <div class="login__form-content-box">
        <div class="login__info">
          <p>Log in:</p> 

          <p>Log in to your account</p>
        </div>
        <form action="" method="POST" class="form-horizontal">
          <div class="row">
            <div class="col-md-6 m-auto">

              <div class="form-content">
                   <div class="form-group">
                     <div class="col-md-12">
                       <label class="control-label" for="username"></label>
                       <input class="form-control" name="userName" placeholder="User Name" type="text" required>
                     </div>
                   </div>

                   <div class="form-group">
                     <div class="col-md-12">
                       <label class="control-label" for="password"></label>
                       <input class="form-control" name="password" placeholder="password" type="password" required>
                     </div>
                   </div>

                   <div class="button__login button__sign">
                     <button type="submit" name="logIn" class="btn btn-sign">Log In</button>
                   </div>
                <div class="account--info">
                  <p><a href="">Forgot Password</a></p>
                  <p>
                    <span>Don’t have an account?</span>
                    <a href="signup.php">Create Account</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </form>
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

  <?php

   if (isset($_POST['logIn'])) {
         include('connection.php');
         $conn=connectDB();

      $userName = $_POST['userName'];
      $password = $_POST['password'];

         $sql2="select * from user where userName='$userName' AND password='$password'";

         $result2 =mysqli_query($conn,$sql2);
         $row = mysqli_fetch_assoc($result2);
         $rowCount = mysqli_num_rows($result2);

         if ($rowCount == 1) {  

           $_SESSION['userName'] = $row['first_name'].' '.$row['last_name'];

            echo "<script>window.location.href='userProfile.php'</script>";
         }else{

           echo '<script type="text/javascript">
                     alert("Login fail. Try again.");
                 </script>';
         }        
      } 

 ?>

<?php include('footer.php'); ?>

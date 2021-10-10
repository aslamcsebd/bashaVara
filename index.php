<?php 
session_start();
 ?>

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
                <a class="nav-link header__nav-link-icon" href=""><img src="./asset/image/android.png"
                    class="img-fluid" alt=""></a>
              </li>

            <?php if (!isset($_SESSION['userName'])) { ?>

              <li class="nav-item header__nav-item">
                <a class="nav-link header__nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item header__nav-item">
                <a class="nav-link header__nav-link" href="signup.php">Sign Up</a>
              </li>

            <?php } ?>
               <li class="nav-item header__nav-item">
                  <a class="nav-link header__nav-link " href="form.php">Add House</a>
               </li>

            <?php if (isset($_SESSION['userName'])) { ?>
               <li class="nav-item header__nav-item">
                  <a class="nav-link header__nav-link " href="logout.php">Logout</a>
               </li>
            <?php } ?>


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

  <!-- BANNER SECTION -->
  <section class="banner--section">
    <div class="container_content">
      <div class="banner__row">
        <div class="banenr--col-content">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./asset/image/banner__image-1.jpg" class="d-block w-100" height="550vh" alt="...">
                <div class="carousel-caption banner__carousel-caption">
                  <div class="container">
                    <div class="banner__content-col text-center">
                      <div class="banner__text">
                        <h4>Find great <span>places</span> & <span>places</span> <br>to share a home with.</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./asset/image/banner__image-2.jpg" class="d-block w-100" height="550vh" alt="...">
                <div class="carousel-caption banner__carousel-caption">
                  <div class="banner__content-col text-center">
                    <div class="banner__text">
                      <h4>Focus on what's <span>important</span> and<br>spend <span>less</span> on rent.</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./asset/image/banner__image-3.jpg" class="d-block w-100" height="550vh" alt="...">
                <div class="carousel-caption banner__carousel-caption">
                  <div class="banner__content-col text-center">
                    <div class="banner__text">
                      <h4>Choose to live with <span>like-minded</span><br>people.</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="banner__content--last">
        <div class="container">
          <div class="select__menu d-none d-md-block text-center">
  
            <li><a href="add-list.php?search=Room">Room</a></li>
            <li><a href="add-list2.php">Roommate</a></li>
            <li><a href="add-list.php?search=House">House</a></li>
            <li><a href="add-list.php?search=Appartment">Appartment</a></li>
    
          </div>
              
            <form action="add-list3.php" method="POST">
           

    
         <div class="form-row">
           
            <div class="form-group col-md-8 m-auto">
               <div class="input-group">
                  <div class="input-group-prepend banner__input-group-prepand">
                     <div class="input-group-text banner__input-group-text">
                        <i class="fas fa-map-marker-alt"></i>
                     </div>
                  </div>
                  <input class="form-control banner__form-control-search" name="search" type="search"
                  placeholder="Enter an address, neighborhood, city or ZIP code" aria-label="Search">

               </div>    
            </div>
    
          </div>

           </form>
          <div class="body__scroll-down text-center">
            <a href="" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CITY--LIST SECTION -->
  <section class="city__list--section city--js">
    <div class="container">
      <h1 class="heading__primary-main">
        <span>Search Listings in Top Cities</span>
      </h1>
      <div class="city__list-content">

        <div class="fx1 division row">

      <?php    
         include('connection.php');
         $conn=connectDB();
         $sql="select*from division";
         $result=mysqli_query($conn,$sql);

         while ($row=mysqli_fetch_assoc($result)) { ?>

             <div class="col-md-3 col-sm-6 col-6">
               <a href="add-list3.php?search=<?= $row['name']; ?>">
                 <div class="item">
                   <img src="<?= $row['image']; ?>" class="img-fluid"  alt="">
                   <h3><span><?= $row['name']; ?></span></h3>
                   <h4><span><i class="fas fa-search"></i></span></h4>
                   <p><?= $row['name']; ?> <br> listing</p>
                 </div>
               </a>
             </div>
         <?php }?>

        <!--  <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
        </div> -->

       <!--  <div class="fx1 row">

          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
        </div>

        <div class="fx1 row">

          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-sm-6 col-6">
            <a href="add-list.htm">
              <div class="item">
                <img src="./asset/image/listing-1.png" class="img-fluid" alt="">
                <h3><span>Chittagong</span></h3>
                <h4><span><i class="fas fa-search"></i></span></h4>
                <p>Chittagong <br> listing</p>
              </div>
            </a>
          </div>
        </div> -->

      </div>
    </div>
  </section>

  <!-- ADD LIST SECTION -->
  <section class="add__listing--section">
    <div class="container">
      <div class="add__listing__content">
        <div class="add__list-button">
          <p>
            <a href="form.php">
              <span><i class="fas fa-plus"></i></span>
              <span>Add Your Listing</span>
            </a>
          </p>

          <p>Tell us what you are looking for.</p>
          <p>Create Your listings in less then 1 minute</p>
        </div>
      </div>
    </div>
  </section>

  <!-- INFO--TEXT SECTION -->
  <section class="info--text">
    <div class="container">
      <div class="info__content">
        <div class="card-deck">
          <div class="card">
            <div class="card--icon">
              <p><span><i class="fas fa-user-friends"></i></span></p>
            </div>
            <div class="card-body">
              <h5 class="card-title">Discover amazing people</h5>
              <p class="card-text">Connect with users using <span>Roomster mailbox</span> and <span>Social
                  connect</span>.</p>
            </div>

          </div>
          <div class="card">
            <div class="card--icon">
              <p><span><i class="fas fa-home"></i></span></p>
            </div>
            <div class="card-body">
              <h5 class="card-title">Find a home</h5>
              <p class="card-text">Search listings in 192 countries and 18 languages</p>
            </div>

          </div>
          <div class="card">
            <div class="card--icon">
              <p><span><i class="fas fa-paw"></i></span></p>
            </div>
            <div class="card-body">
              <h5 class="card-title">Pets</h5>
              <p class="card-text">Use search filters to find places and people that are pet friendly</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRESS SECTION -->
  <section class="press--section">
    <div class="container">
      <div class="press__content">
        <h3 class="heading__primary-sub">
          <span>In the press</span>
        </h3>
        <div class="image__content">
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="image__content">
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
          <div class="images--press">
            <img src="./asset/image/press-1.png" class="img-fluid" alt="">
          </div>
        </div>

        <div class="press__content--button">
         
            <a href=""><p>Read More</p></a>
         
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
  <script src="./asset/js/jquery.min.js"></script>
  <script src="./asset/js/owl.carousel.min.js"></script>
  <script src="./asset/js/bootstrap.min.js"></script>
  <script src="./asset/js/script.js"></script>

  <script>
    $('.carousel').carousel({
      interval: 5000
    })
  </script>

</body>

</html>

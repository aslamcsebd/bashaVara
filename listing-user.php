<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I'm offering a private studio</title>
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

    <?php 
         if (isset($_GET['id'])) {
            $id = $_GET['id'];
            include('connection.php');
            $conn=connectDB();

            $sql="select*from room where id='$id'";
            $result=mysqli_query($conn,$sql);   
            $row=mysqli_fetch_assoc($result);


         }
     ?>

    <!-- LISTING BANNER SECTION -->
    <section class="listing__banner">
       <!--  <div class="listing__carousel_content-box">
            <div class="listing__carousel--content listing-carousel owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="listing__owl-stage owl-stage">                       
                        <div class="why__owl-item owl-item">
                            <img src="./asset/image/listing_carousel-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="why__owl-item owl-item">
                            <img src="./asset/image/listing_carousel-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="why__owl-item owl-item">
                            <img src="./asset/image/listing_carousel-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="why__owl-item owl-item">
                            <img src="./asset/image/listing_carousel-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="why__owl-item owl-item">
                            <img src="./asset/image/listing_carousel-1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> --> 
        <br>
        <br>

       
     
            <a class="btn btn-success" href="add-list.php" style="font-size: 18px; padding: 5px 20px; margin-left: 120px;">Back</a>         
         <div class="text-center">
           <img src="<?=$row['image']; ?>" class="img-fluid" eight="240" width="360" alt="Image not found">
        </div>     


    </section>

    <!-- USER--INFO SECTION -->
    <section class="user_info-section">
        <div class="container">
            <div class="user_info--content">
                <div class="row">
                    <div class="col-md-7">
                        <div class="user_info-col">
                           
                            <div class="apartment__location-info">
                                <p class="active__time"><span>15 hours ago</span><span
                                        class="badge badge-secondary">New</span></p>
                                        <br>

                                        <div class="apartment__amount">
                                            <p>
                                                <span><?=$row['rent']; ?>tk</span>
                                                <span>/per month</span>
                                            </p>
                                        </div>
                                <p class="user_info-location"><span><i
                 
                                            class="fas fa-map-marker-alt"></i></span><span>Location:  <?=$row['division']; ?></span></p>
                                <p class="apartment_address"><span><?=$row['addressDetails']; ?></span></p>
                            </div>
                           
                            <div class="apartment_details">
                                <p><span><?=$row['bedroom']; ?> Bedroom</span></p>
                                <p><span><?=$row['bathroom']; ?> bathroom</span></p>
                                <p><span>Minimum Stay</span><br><span>3 Months</span></p>
                                <p><span>Available Date</span><br><span><?=$row['date']; ?></span></p>
                                <p><span>Mobile No</span><br><span><?=$row['mobile']; ?></span></p>
                            </div>

                            <div class="apartment_discription">
                                <p><span><i class="fas fa-prescription-bottle"></i></span><span>Description</span></p>
                                <p class="description-text"><?=$row['roomInfo']; ?>
                                    
                                </p>
                            </div>

                            <div class="residence">
                                <p><span><i class="fas fa-home"></i></span><span>Residence</span></p>
                                <p><span>Furnished:</span><span>Yes</span></p>
                                <p><span>Apartment Size:</span><span><?=$row['size']; ?></span></p>

                            </div>

                            <div class="amenities">
                                <p class="amenities__name"><span><i
                                            class="fas fa-home"></i></span><span>Amenities</span></p>
                                <div class="amenities__info-text">
                                    <p>
                                        <span><i class="fas fa-wifi"></i></span><br>
                                        <span>Wireless <br> Internet</span>
                                    </p>
                                    <p>
                                        <span><i class="fas fa-car"></i></span><br>
                                        <span>Street <br> Parking</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="col-content--user text-center">
                            <?php if (isset($_SESSION['userName'])) { ?>
                               <div class="user__info-img">
                                   <img src="./asset/image/user.jpg" class="img-fluid" alt="">
                               </div>
                               <p class="user__info--name">
                                   <a href="userProfile.htm">
                                       <span><?php echo $_SESSION['userName']; ?></span>
                                   </a>
                               </p>

                            <?php }?>


                            
                            <p class="user__info-offer">Offering an entire place</p>
                            <p class="user__info-varified"><span>
                                    <i class="fas fa-check-circle"></i>
                                    Facebool Varified
                                </span>
                                <span>
                                    <i class="fas fa-check-circle"></i>
                                    Linked in Varified
                                </span>
                            </p>

                            <p class="user__info-varified"><span><i class="fas fa-check-circle"></i>
                                    Email Varified
                                </span>
                                <span>
                                    <i class="fas fa-check-circle"></i>
                                    Phone Varified
                                </span>
                            </p>

                            <form action="" class="form-row">
                                <div class="col-md-8 m-auto">
                                    <div class="form-group">
                                        <textarea class="form-control user__info--form-control" rows="6"
                                            placeholder="Write a message to Stephen" required></textarea>
                                    </div>
                                    <button class="btn btn-outline-info btn-lg btn-block btn-user__send">Send
                                        Message</button>
                                </div>

                            </form>

                            <div class="user__contact-info">
                                <p>
                                    <a href="">
                                        <span><i class="fas fa-phone-alt"></i>
                                            show phone number
                                        </span>

                                    </a>
                                </p>

                                <p><span>or</span></p>

                                <p>Find <a href="">Stephen</a> on Social Media</p>
                                <div class="user__social-contact">
                                    <a href="">
                                        <span><i class="fab fa-facebook-square"></i></span>
                                    </a>

                                    <a href="">
                                        <span><i class="fab fa-linkedin"></i></span>
                                    </a>
                                </div>
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

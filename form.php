<?php
   session_start();
   if (!isset($_SESSION['userName'])) {

      echo "<script>window.location.href='login.php'</script>";

   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basavaraa</title>
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

                            <li class="nav-item header__nav-item">
                                <a class="nav-link header__nav-link" href="index.php">Home</a>
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


    <section class="form__room--section">
        <div class="container">
            <div class="form__room-content">
                <div class="row">
                    <div class="col-md-7 m-auto">
                        <form action=" " method="POST" enctype="multipart/form-data">

                           <div class="form-group">
                                <label for="">Type</label>
                                <select name="rentType" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Room">Room</option>
                                    <option value="Roommate">Roommate</option>
                                    <option value="House">House</option>   
                                    <option value="Appartment">Appartment</option>   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Room Rent Information</label>
                                <input type="text" name="roomInfo" class="form-control form__room-control" placeholder="Example: 2 Room Rent for Family at Rajshahi District" id="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Available Date</label>
                                <input type="date" name="date" class="form-control form__room-control" id="" required>
                            </div>

                            <div class="form-group">
                                <label for="">Advance Amount</label>
                                <input type="text" name="advance" class="form-control form__room-control" id="" required>
                            </div>

                            <div class="form-group">
                                <label for="">Property Rent</label>
                                <input type="text" name="rent" class="form-control form__room-control" id="" required>
                            </div>


                            <div class="form-group">
                                <label for="">Rent Nagotiable</label>
                                <select name="rentNago" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Division</label>
                                <select name="division" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Rangpur">Rangpur</option>
                                    <option value="Mymensingh">Mymensingh</option>
                                </select>
                            </div>                           

                            <div class="form-group">
                                <label for="">Address Details</label>
                                <input type="text" name="addressDetails" class="form-control form__room-control" id="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Bedroom</label>
                                <select name="bedroom" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Dining</label>
                                <select name="dining" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Drawing</label>
                                <select name="drawing" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kitchen</label>
                                <select name="kitchen" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Bathroom</label>
                                <select name="bathroom" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Balcony</label>
                                <select name="balcony" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">I Prefer</label>
                                <select name="prefer" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Family">Family</option>
                                    <option value="Bachelor">Bachelor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Floor No</label>
                                <select name="floorNo" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Size</label>
                                <select name="size" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="900 sqft">900 sqft</option>
                                    <option value="1000 sqft">1000 sqft</option>
                                    <option value="1200 sqft">1200 sqft</option>
                                    <option value="1500 sqft">1500 sqft</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Garage</label>
                                <select name="garage" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Emergency Energy</label>
                                <select name="emergencyEnergy" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Side</label>
                                <select name="side" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Front">Front</option>
                                    <option value="Rear">Rear</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Lift</label>
                                <select name="lift" class="form-control form__room-control" id="" required>
                                    <option value="">Select</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Mobile No</label>
                                <input type="text" name="mobile" class="form-control form__room-control" required>
                            </div>

                             <div class="form-group">
                                <label for="">Room's Image</label>
                                <input type="file" class="form-control form__room-control" name="image" required>
                            </div>

                            <div class="submit__button">
                                <button class="btn btn-submit" name="submit" type="submit">Submit</button>
                            </div>


                        </form>
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

<?php 

if (isset($_POST['submit'])) {      
   session_start();
   include('connection.php');
   $conn=connectDB();

   $rentType=$_POST['rentType'];
   $roomInfo=$_POST['roomInfo'];
   $date=$_POST['date'];
   $advance=$_POST['advance'];
   $rent=$_POST['rent'];
   $rentNago=$_POST['rentNago'];
   $division=$_POST['division'];
   $addressDetails=$_POST['addressDetails'];
   $bedroom=$_POST['bedroom'];
   $dining=$_POST['dining'];
   $drawing=$_POST['drawing'];
   $kitchen=$_POST['kitchen'];
   $bathroom=$_POST['bathroom'];
   $balcony=$_POST['balcony'];
   $prefer=$_POST['prefer'];
   $floorNo=$_POST['floorNo'];
   $size=$_POST['size'];
   $garage=$_POST['garage'];
   $emergencyEnergy=$_POST['emergencyEnergy'];
   $side=$_POST['side'];
   $mobile=$_POST['mobile'];
   $lift=$_POST['lift'];
   // $image=$_POST['image'];


   $image='room_Image/'. $_FILES['image']['name'];
   move_uploaded_file($_FILES['image']['tmp_name'],$image);

   $sql="insert into room values(null, '$rentType', '$roomInfo', '$date', '$advance', '$rent', '$rentNago', '$division', '$addressDetails', '$bedroom', '$dining', '$drawing', '$kitchen', '$bathroom', '$balcony', '$prefer', '$floorNo', '$size', '$garage', '$emergencyEnergy', '$side', '$lift', '$mobile', '$image')";
      $result=mysqli_query($conn,$sql);

      if($result) {

         $sql2="select * from room where roomInfo='$roomInfo' AND date='$date'";

         $result2 =mysqli_query($conn,$sql2);
         $rowCount = mysqli_num_rows($result2);

         if ($rowCount == 1) {     
             echo '<script type="text/javascript">
                              alert("Data insert successfully.");
                           </script>';
             echo "<script>window.location.href='index.php'</script>";
         }else{ 
            echo '<script type="text/javascript">
                     alert("Data insert fail. Try again.");
                  </script>';
         }        
      } 
   }

 ?>
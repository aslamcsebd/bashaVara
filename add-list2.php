<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Place in anywhere</title>
  <link rel="stylesheet" href="./asset/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="./asset/css/owl.carousel.min.css">
  <link rel="stylesheet" href="./asset/css/bootstrap.min.css">  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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

  <!-- ALL LIST SECTION -->
  <section class="all--list">
    <div class="container">
      <div class="looking__btn">
        <div class="looking__text">
          <p>
            <span>I'm looking for</span>
          </p>
        </div>
       <!--  <div class="list__btn">
          <a href="add-list.htm"><span>Room</span></a>
          <a href="add-list.htm"><span>Roommate</span></a>
          <a href="add-list.htm"><span>House</span></a>
          <a href="add-list.htm"><span>Appartment</span></a>
        </div> -->
      </div>

      <div class="list__select">
        <div class="select__type">
          <div class="form-group">
            <select class="form-control list__form-control" id="list--selection">
              <option>Sort by: Last Activity</option>
              <option>Sort by: Newest</option>
              <option>Sort by: Rent</option>
            </select>
          </div>
        </div>

        <div class="add__list--new add__new-content">
          <div class="add__new-content">
            <p><span>
                <a href="form.php"><i class="fas fa-plus"></i></a>
                <br>
                Add New Listing
              </span></p>
          </div>
        </div>
      </div>

   <?php      
         include('connection.php');
         $conn=connectDB();

         $sql="select*from room where prefer='Bachelor'";
         $result=mysqli_query($conn,$sql);   

 ?>

<style type="text/css">
   .table { font-size: 18px;}
</style>
   <table class="table table-bordered" >
      <thead class="text-center">
         <tr>
            <th scope="col">Room</th>
            <th scope="col">Information</th>
         </tr>
      </thead>

      <tbody> 
         <?php while ($row=mysqli_fetch_assoc($result)) { ?>

            <tr >
               
               <td>
                  <!-- <div class="col-md-4 text-center"> -->
                     <!-- <div class="add__list--img"> -->
                        <div class="add---img text-center">
                           <a href="listing-user.php?id=<?=$row['id']; ?>">
                              <img src="<?=$row['image']; ?>" class="img-fluid" height="240" width="360" alt="Image not found">
                           </a>
                        </div>
                     <!-- </div>   -->
                  <!-- </div>   -->
               </td>
               <td>
                  <p><?=$row['roomInfo']; ?></p>
                  <p>
                     <?=$row['rent']; ?> tk
                     /per month
                  </p> 
                 
                     Advance: <?=$row['advance']; ?>tk <br>
                     House type: <?=$row['prefer']; ?>
                  </p>
                  <?=$row['addressDetails']; ?> <br>
                  <?=$row['division']; ?>
               </td>

            </tr>
         <?php } ?>
      </tbody>
   </table>

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
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
     $(document).ready( function () {
    $('.table').DataTable();
} );
  </script>


  <script src="./asset/js/owl.carousel.min.js"></script>
  <script src="./asset/js/bootstrap.min.js"></script>
  <script src="./asset/js/script.js"></script>


</body>

</html>
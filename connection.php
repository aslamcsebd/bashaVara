<?php    
   function connectDB() {
      $conn =mysqli_connect('localhost','root','','basha_varaa');
      return $conn;
   }


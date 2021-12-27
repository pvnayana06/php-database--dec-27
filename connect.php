<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
  {
  $server = "localhost";
  $user = "root";
  $pass = "nayana@6694";
  $database = "bloodbank";
      $conn = mysqli_connect($server, $user, $pass, $database);
      if(! $conn ) 
      {
        die('Could not connect: ' .mysqli_connect_error());
      }
     else
     {
     echo 'Connected successfully';
    }
     //mysqli_close($conn);
      if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['place']) && isset($_POST['bloodgrp']))
      {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $place = $_POST['place'];
          $bloodgrp = $_POST['bloodgrp'];
          require_once("test.php");
          $query = "INSERT INTO user (name, emailid, phoneno, place, bloodgrp) VALUES ('$name', '$email', '$phone', '$place', '$bloodgrp')";
          
          $result = mysqli_query($conn, $query);

          if($result)
          {
            echo "<script> alert('Entry Successfull')</script>";
          }
          else
          {
            echo "<script> alert('Error')</script>";
          }

      }
  }
?>
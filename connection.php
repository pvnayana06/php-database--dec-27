<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
    {
        $server = "localhost";
        $user = "root";
        $pass = "nayana@6694";
        $database = "register";
            $conn = mysqli_connect($server, $user, $pass, $database);
            if(! $conn ) 
            {
              die('Could not connect: ' .mysqli_connect_error());
            }
           else
           {
           echo 'Connected successfully';
          }
        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['phone']) && isset($_POST['country']) && isset($_POST['city']) && isset($_POST['zipcode']))
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $phone = $_POST['phone'];
            $country = $_POST['country'];
            $city = $_POST['city'];
            $zipcode = $_POST['zipcode'];

            require_once("register.php");
            $query = "INSERT INTO user_account (fname, lname, email, pass,  phone, country, city, zipcode) VALUES ('$fname', '$lname', '$email', '$pass', '$phone', '$country', '$city', '$zipcode')";
          
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
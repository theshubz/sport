<?php

 include('logincheck.php');

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logistics &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
     
 .tbl{
  width:140%;
  color:white;
  font-size: 15px; 
  margin-left: -150px;
  
 }
 


    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
   <?php include('./commonpages/header.php');?>
  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-white font-weight-light text-uppercase font-weight-bold">Customers Details</h2>
           <!--  <p class="breadcrumb-custom"> -->
            <form method="post" action="check_customer.php">
      <input type="submit" value="view" name="display">
    <table class="tbl" cellpadding="2px" cellspacing="5px">

    <tr style="border-bottom: 2px solid">
       <th>NAME</th>
       <th>ADDRESS</th>
       <th>MOBILE</th>
       <th>EMAIL-ID</th>
       <th>TRAVEL-DATE</th>
       <th>AMOUNT</th>
       <th>PAYBY</th>
       <th>DESTINATION</th>
       <th>NO.PERSON</th>
       <th>GENDER</th>
       <th>DELETE</th>
    </tr>
    

    <?php
    if(isset($_POST['display'])){
    $id=$_SESSION['id'];
 include('./php/connection_db.php');

  $sql="SELECT name,mobile,address,email_id,travel_date,amount,payby,destination,person,gender,customer_id FROM customer WHERE user_id=$id";
   
    $data=mysqli_query($con,$sql);

        while($row=mysqli_fetch_array($data)){
       ?>
    <tr style="border-bottom: 2px solid">
      
       <td><?=$row['name']?></td>
       <td><?=$row['address']?></td>
       <td><?=$row['mobile']?></td>
       <td><?=$row['email_id']?></td>
       <td><?=$row['travel_date']?></td>
       <td><?=$row['amount']?></td>
       <td><?=$row['payby']?></td>
       <td><?=$row['destination']?></td>
       <td><?=$row['person']?></td>
       <td><?=$row['gender']?></td>
       <td><a href="./php/customer_delete.php?cid=<?=$row['customer_id'];?>">DELETE</a></td>
       
    </tr>
 <?php
  }
}
  ?>


     </table>
  </form>
            <!-- </p> -->
          </div>
        </div>
         

      </div>
    </div>  

   <!-- footer remove form here --> 
    
   
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>
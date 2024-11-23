<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
  <link rel="stylesheet" href="css/style.min.css">
  <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
  <title>Grandeur Hotel | Rooms</title>
</head>

<body>
  <div class="container text-center pt-5">
    <h2>Presidential Offer</h2>
    <p class="lead">Presidential Suite is the most lavish, extravagant, and exclusive offering in a hotel. It's a category above all other suites, reserved for guests who expect—and can afford—the very best. These suites are often larger than most apartments, designed with unparalleled attention to detail, and equipped with amenities that go far beyond the typical hotel room.

 </p>
  </div>


  <div class="col-12">
    <div class="row pt-2">

      <div class="col-md-6 d-block-sm p-5 bg-success text-light">
        <h2>Luxury Suite</h2>
        <p class="lead"> luxury suite is more than just a place to sleep—it is an immersive environment where every detail is designed to pamper the guest and elevate their stay to new heights..</p>

        <div class="icons">
          <i class="fas fa-wifi"></i>
          <i class="fas fa-tv"></i>
          <i class="fas fa-swimmer"></i>
          <i class="fas fa-parking"></i>
        </div>

        <div>
        <a href="room_listing.php"><button type="button" class="btn btn-primary pb-2 my-4 text-uppercase" data-toggle="modal"
           data-target="#servicesmodal">BOOK NOW</button></a>
        </div>

      </div> 

  <div class="col-12 p-5">
    <div class="row">


      <div class="col-md-6 d-block-sm pb-2">
        <img class="w-100" src="images/ke.jpg" alt="Hotel room">
      </div>


      <div class="col-md-6 d-block-sm px-3">
        <h2>Signature Room</h2>
        <p>Signature Room is a specially designed and curated hotel room that goes beyond standard accommodations. It typically features distinctive design elements, custom-made furniture, exclusive amenities, and personalized services that reflect the unique identity of the hotel. </p>
        <div>
        <div>
           <a href="room_listing.php"><button type="button" class="btn btn-primary pb-2 my-4 text-uppercase" data-toggle="modal"
           data-target="#servicesmodal">BOOK NOW</button></a>
        </div>

        </div>

      </div> 
    </div> 
  </div> 


  <div class="col-12 p-5">
    <div class="row">

  

      <div class="col-md-6 d-block-sm">
        <img class="w-100" src="images/cl2.jpeg" alt="Hotel room">
      </div>


      <div class="col-md-6 d-block-sm px-3">
        <h2>Classic Room</h2>
        <p>Classic Room is typically the standard or entry-level room offered by many hotels, but that doesn’t mean it lacks in comfort or quality. It’s designed to provide a pleasant, functional, and cozy space where guests can rest and recharge.</p>

        <div>
        <a href="room_listing.php"><button type="button" class="btn btn-primary pb-2 my-4 text-uppercase" data-toggle="modal"
        data-target="#servicesmodal">BOOK NOW</button></a>
        </div>

      </div> 

    </div> 
  </div> 



  <div class="col-12 p-5">
    <div class="row py-0">



      <div class="col-md-6 d-block-sm">
        <img class="w-100" src="images/de.jpeg" alt="Hotel room">
      </div>

      <div class="col-md-6 d-block-sm px-3">
        <h2>Deluxe Room</h2>
        <p> Deluxe Room is generally considered a higher-tier room compared to standard or classic rooms but doesn’t quite reach the level of suites or penthouses. It is designed to offer an elevated experience with additional space, upgraded amenities, and often better views or location within the hotel.</p>

        <div>
        <a href="room_listing.php"><button type="button" class="btn btn-primary pb-2 my-4 text-uppercase" data-toggle="modal"
        data-target="#servicesmodal">BOOK NOW</button></a>
        </div>

      </div> 

    </div> 
  </div> 

  <?php 
  include "testimonial.php";
  ?>


<?php 
include_once "gallery.php";
?>


  <footer class="page-footer font-small text-center text-md-left">

    <div class="container py-5">

      <div class="row">

        <div class="col-md-4 mx-auto">

          
          <h3 class="font-weight-bold text-uppercase mt-3 mb-4">Address</h3>

          <div>
            <p>123 Luxury Avenue, Suite 500</p>
            <p>San Franciso,California, USA</p>
            <a href="contact_us.php"><small>Get direction</small></a>
          </div>

        </div> 

        <hr class="clearfix w-100 d-md-none">

      
        <div class="col-md-4 mx-auto">

          <h3 class="font-weight-bold text-uppercase mt-3 mb-4">Reservation</h3>

          <div>
            <p>Phone: +234-810-643-9018</p>
            <p>Email: Grandeurnhotel@gmail.com</p>
            <div>
            <a href="room_listing.php"><button type="button" class="btn btn-primary pb-2 my-4 text-uppercase" data-toggle="modal"
           data-target="#servicesmodal">BOOK NOW</button></a>
        </div>
            </div>
          </div>

        </div> 

        <hr class="clearfix w-100 d-md-none">

        <div class="col-md-4 mx-auto">

          <h3 class="font-weight-bold text-uppercase mt-3 mb-4">Newsletter</h3>
        </div> 

      </div> 

    </div>
    
    <div class="footer-copyright text-center bg-dark text-light py-3">© 2024
      <a class="text-light"> GRANDEUR HOTELS</a>
    </div>

  </footer>


</body>
</html>
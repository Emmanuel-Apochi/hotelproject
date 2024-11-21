<?php 
require_once "navbar.php";
require "config.php";

$sql = "SELECT * FROM rooms";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$hotels = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <div class="text-with-background mb-3 glow">
            <h1>Make <br>Yourself<br> At Home In Our Hotel.</h1>
        </div>
        <h3 style="text-align: center;">OUR ROOMS</h3>
   <div class=" container row">
   <?php foreach ($hotels as $hotel):?>
      <div class="col-md-4">
        
      <div class="card" style="width: 18rem;">
  <img src="images/<?php echo $hotel['image_url'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $hotel['room_name'];?></h5>
    <h4 class="card-title"><?php echo $hotel['room_type'];?></h4>
    <p class="card-text"><?php echo $hotel['description'];?></p>
    <h5>$<?php echo $hotel['price_per_night'];?></h5>
    <a href="room_details.php?id=<?php echo $hotel["id"]; ?>" class="btn btn-primary">View</a>
  </div>
  </div>
  </div>
  <?php endforeach;?>
   </div>
    
</body>
</html>
<?php 
require_once "navbar.php";
require "config.php";

$sql = "SELECT * FROM services";

$stmt = $pdo->prepare($sql);

$stmt->execute();

$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <div class="text-background mb-3">
            <h1>Our Services.</h1>
        </div>
    
   <div class=" container row mt-5">
   <?php foreach ($services as $service):?>
      <div class="col-md-4">
        
      <div class="card" style="width: 18rem;">
  <img src="images/<?php echo $service['image_url'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $service['service_name'];?></h5>
    <h4 class="card-title"><?php echo $service['description'];?></h4>
    <p class="card-text">$<?php echo $service['cost'];?></p>
    <a href="service_details.php?id=<?php echo $service["id"]; ?>" class="btn btn-primary">View</a>
  </div>
  </div>
  </div>
  <?php endforeach;?>
   </div>
    
</body>
</html>
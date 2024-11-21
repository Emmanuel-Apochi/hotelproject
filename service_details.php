<?php 
require_once("config.php");
require_once "navbar.php";
if(! isset($_GET['id'])) {
    header ('Location: Home_page.php');
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM services WHERE id=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$services = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
    <img src="images/<?php echo $services['image_url'];?>" class="img-fluid rounded-start"  style="max-width: 1000px;">
    </div>
    <div class=" container" style="max-width: 1000px height 1000px;">
      <div class="card-body" style="max-width: 1000px;">
        <h5 class="card-title"><?php echo $services['service_name'];?></h5>
        <h5 class="card-title"><?php echo $services['description'];?></h5>
        <p class="card-text container"><?php echo $services['cost'];?></p>


        <h3 style="text-align: center; color: black;">Fill in with your information to recieve our services</h3>
        <form action="https://formspree.io/f/mrbglqwo" method="POST" id="bookingForm">
        <input type="text" class="form-control" name="name" placeholder="Name" required><br>
        <input type="text" class="form-control" name="email" placeholder="Email" required><br>
        <input type="number" class="form-control" name="phone" placeholder="Phone number" required><br>
        <input type="number" class="form-control" name="number of persons" placeholder="Number of persons" required><br>
        <button type="submit" class="btn btn-primary">BOOK NOW</button>

    </form>

      </div>
    </div>
    
    </div>
</body>
</html>
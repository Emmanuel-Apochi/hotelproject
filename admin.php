<?php 
    require_once "navbar.php";
    
        require_once 'config.php';
        
 
        if(isset($_POST['save'])){
    
                $image_url = $_POST['image_url'];
                $room_name = $_POST['room_name'];
                $room_type = $_POST['room_type'];
                $description = $_POST['description'];
                $price_per_night = $_POST['price_per_night'];
                $availability_status = $_POST['availability_status'];
 
                $sql = "INSERT INTO rooms(image_url, room_name, room_type, description, price_per_night, availability_status )  VALUES (?,?,?,?,?,?)";
 
                $stmt = $pdo->prepare($sql);

                if($stmt->execute([$image_url, $room_name, $room_type, $description, $price_per_night, $availability_status])) {
                    $_SESSION['message'] = "success";
                    header("Location: admin.php");
                    exit;
                }else{
                    $_SESSION['message'] = "error:";
                    header("Location: admin.php");
                }
 
        }

?>

<?php
 require_once 'config.php';
if(isset($_POST['submit'])){
    
    $image_url = $_POST['image_url'];
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];

    $sql = "INSERT INTO services (image_url, service_name, description, cost )  VALUES (?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    if($stmt->execute([$image_url, $service_name, $description, $cost,])) {
        $_SESSION['message'] = "success";
        header("Location: admin.php");
        exit;
    }else{
        $_SESSION['message'] = "error:";
        header("Location: admin.php");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
        <head>
        <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
        <script src="bootstrap-5.3.1-dist/js/bootstrap.bundle.js"></script>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        </head>
<body>
        <div class="container">
                <h3>Welcome To </h3>
                <h3 class="text-primary">ADMIN PANEL</h3>
                <hr style="border-top:1px dotted #ccc;" />
                <div class="row">
                        <div class="col-md-6">
                                <div style="color:blue;"><h1>Rooms</h1></div>
                                <form method="POST">
                                        <div cass="form-group">
                                                <label>image_url</label>
                                                <input type="text" name="image_url" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group">
                                                <label>Room Name</label>
                                                <input type="text" name="room_name" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group">
                                                <label>Room Type</label>
                                                <input type="text" name="room_type" class="form-control" required="required" />
                                        </div>
                                        <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" name="description" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group">
                                                <label>Availability_status</label>
                                                <input type="text" name="availability_status" class="form-control" required="required"/>
                                        </div>
                                        <div class="form-group">
                                                <label>price_per_night</label>
                                                <input type="number" name="price_per_night" class="form-control" required="required"/>
                                        </div>
                                        <center><button name="save" class="btn btn-primary mt-4">Save</button></center>
                                </form>
                        </div>

                <div class="col-md-6">
                <div style="color:blue;"><h1>Services</h1></div>
                        <form method="POST" >
                                <div cass="form-group">
                                        <label>image_url</label>
                                        <input type="text" name="image_url" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                        <label>Service Name</label>
                                        <input type="text" name="service_name" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control" required="required"/>
                                </div>
                                <div class="form-group">
                                        <label>Cost</label>
                                        <input type="number" name="cost" class="form-control" required="required"/>
                                </div>
                                <center><button name="submit" class="btn btn-primary mt-4">Submit</button></center>
                        </form>
                </div>
           </div>
        </div>
</body>
</html>
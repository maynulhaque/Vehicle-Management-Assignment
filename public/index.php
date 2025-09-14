<?php
include './views/header.php';
require_once "./../app/classes/VehicleManager.php";
$VehicleManager = new VehicleManager("","","","");
$vehicles = $VehicleManager->getVehicles();
// var_dump($vehicles);
?>

<div class="container my-4">
    <h1>Vehicle Listing</h1>
    <a href="./../public/views/add.php" class="btn btn-success mb-4">Add Vehicle</a>
    <div class="row">
        <!-- Loop Go here -->
            <?php foreach($vehicles as $id => $vehicle){ ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo htmlspecialchars($vehicle['image']); ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($vehicle['name']); ?></h5> 
                         <p class="card-text">Type: <?php echo htmlspecialchars($vehicle['type']); ?></p>
                        <p class="card-text">Price: $<?php echo $vehicle['price']; ?></p>
                        <a href="./views/edit.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                        <a href="./views/delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
                        <a href="./views/view.php?id=<?php echo $id; ?>" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        <!-- Loop ends here -->
    </div>
</div>

</body>
</html>

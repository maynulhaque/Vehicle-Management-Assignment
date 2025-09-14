<?php


include './header.php';
require_once "../../app/classes/VehicleManager.php";

$VehicleManager = new VehicleManager("","","","");
$id = $_GET['id'];
if($id === null){
    header("Locaton: ../index.php");
    exit ;
}  
$vehicle = $VehicleManager->viewVehicle($id);
if(!$vehicle){
    header("Locaton: ../index.php");
    exit ;
}
?>
<div class="container">
    <div class="card mt-4" style="max-width: 500px;">
        <div class="card-header"><?= htmlspecialchars($vehicle['name']) ?></div>
        <div class="card-body">
            <img src="<?= htmlspecialchars($vehicle['image']) ?>" class="card-img-top" alt="<?= $vehicle['name'] ?>">
            <h5 class="card-title">Name: <?= htmlspecialchars($vehicle['name']) ?></h5>
            <p class="card-text">
                Type: <?= htmlspecialchars($vehicle['type']) ?><br>
                Price: $<?= htmlspecialchars($vehicle['price']) ?>
            </p>
            <a href="../index.php" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
</body>
</html>
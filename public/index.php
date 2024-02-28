<?php
include '../config/config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = array();

if($result->num_rows > 0){
    // Output the data
   while($row = $result->fetch_assoc()){
    array_push($products, $row);
   } 
}

include '../templates/header.php';
?>

<div class="container mt-5">
    <div class="row">
        <?php foreach($products as $product): ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="card h-100 bg-warning">
                <div class="card-body">
                    <img src="<?php echo $product['image_url']; ?>" alt="" class="img-fluid d-block mx-auto border rounded-circle"                     data-bs-toggle="modal" 
                    data-bs-target="#imageModal" onclick="showImageModal(this.src)">
                    <h4 class="card-title"><?php echo htmlspecialchars( $product['name']); ?></h4>
                    <p class="card-text mb-0">Price: <?php echo htmlspecialchars($product['price_per_unit']); ?></p>
                    <p class="lead">Unit: <?php echo htmlspecialchars($product['unit']); ?></p>
                    <button class="btn btn-primary" onclick="addItemToCartCost(<?php echo htmlspecialchars($product['price_per_unit']); ?>)">Add to Cart</button>
                    <button class="btn btn-success" 
                    data-id ="<?php echo htmlspecialchars($product['product_id']) ?>"
                    data-name ="<?php echo htmlspecialchars($product['name']) ?>"
                    data-img ="<?php echo htmlspecialchars($product['image_url']) ?>"
                    data-unit ="<?php echo htmlspecialchars($product['unit']) ?>"
                    data-price ="<?php echo htmlspecialchars($product['price_per_unit']) ?>"
                    onclick="setupModal(this)"
                    >Order Now</button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <h4 class="text-end">Add to Cart Cost: <span id="addToCartCost">0.00</span></h4>
</div>

<?php include 'modals/image_modal.php' ?>
<?php include 'modals/image_modal.php' ?>
<?php include '../templates/footer.php' ?>
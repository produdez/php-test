<?php
// create_product.php <name>
// TODO: make auto loading?
require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/models/Product.php";

$newProductName = $_POST["name"];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();


?>

<!DOCTYPE html>
<html lang="en">
	<body>
		<?php
		echo "Created Product with ID " . $product->getId() . "\n";
		?>
	</body>
</html>

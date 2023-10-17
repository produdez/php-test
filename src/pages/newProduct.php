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
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	echo "Created Product with ID " . $product->getId() . "\n";
	?>
</body>
</html>

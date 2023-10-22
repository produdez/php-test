<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/models/Product.php";

$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();
?>

<html lang="en">

<body>
	<p>
		<?php
		foreach ($products as $product) {
			echo $product->getId() . " - " . $product->getName() . "\n";
		}
		?>
	</p>
</body>

</html>

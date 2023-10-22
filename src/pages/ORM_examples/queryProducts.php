<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/models/Product.php";

$dql = "SELECT p FROM Product p";

$query = $entityManager->createQuery($dql);
$products = $query->getResult();
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

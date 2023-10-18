

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/models/Product.php";

$dql = "SELECT p FROM Product p";

$query = $entityManager->createQuery($dql);
$products = $query->getResult();
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>
	<?php
		foreach ($products as $product) {
			echo $product->getId()." - ".$product->getName()."\n";
		}
	?>
	</p>
</body>
</html>

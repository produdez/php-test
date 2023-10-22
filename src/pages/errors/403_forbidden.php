<?php
// Component variables
$c_meta_title = "403_forbidden";

// Import reusable component
include '../../components/Button.php'
?>
<!DOCTYPE html>
<html lang="en">
<!-- head tag included with above c_meta_title variable -->
<?php include '../../components/meta.php' ?>

<body>
	<!-- Raw included header -->
	<?php include '../../components/header.php' ?>

	<div class="w-screen bg-red-100">
		<div class="flex flex-col items-center text-center w-10/12 h-screen  mx-auto">
			<h1 class=" text-red-600 text-3xl font-bold p-5">Forbidden !!!</h1>
		</div>
	</div>

	<!-- Raw included footer -->
	<?php include '../../components/footer.php' ?>
</body>

</html>

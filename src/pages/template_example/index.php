<?php
// Component variables
$c_meta_title = "Example Template Document";

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
	<div>
		<h1> Example template usage</h1>
		<!-- Reusable functional component -->
		<?php Button() ?>
		<?php Button("another") ?>
		<?php Button("different color", color: 'blue') ?>
		<?php Button("disabled", disabled: true, color: 'black') ?>
	</div>

	<!-- Raw included footer -->
	<?php include '../../components/footer.php' ?>
</body>

</html>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/middlewares/startSession.php";

require_once $_SERVER['DOCUMENT_ROOT'] . "/bootstrap.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/middlewares/isLoggedIn.php";

require_once '../../components/MessageBanner.php';

// Component variables
$c_meta_title = "Profile";
?>
<!DOCTYPE html>
<html lang="en">
<!-- head tag included with above c_meta_title variable -->
<?php include '../../components/meta.php' ?>

<body>
	<!-- Raw included header -->
	<?php include '../../components/header.php' ?>
	<?php MessageBanner() ?>
	<div class="min-h-screen center-page">
		<div class="w-5/6 center-container self-center p-10">
			<h2>User profile</h1>
				<p> FullName <?php echo $user->getFullName() ?> </p>
				<p> Email <?php echo $user->getUsername() ?> </p>
				<form action="logout.php">
					<button type="submit"> Logout </button>
				</form>
		</div>

		<!-- Raw included footer -->
		<?php include '../../components/footer.php' ?>
</body>

</html>

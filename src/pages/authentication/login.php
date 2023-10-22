<?php
	// Component variables
	$c_meta_title = "Login Page";

	// Import reusable component
	require_once '../../components/Button.php';
	require_once '../../components/MessageBanner.php';
?>
<!DOCTYPE html>
<html lang="en">
<!-- head tag included with above c_meta_title variable -->
<?php include '../../components/meta.php'?>

<body>
	<!-- Raw included header -->
	<?php include '../../components/header.php'?>
	<?php MessageBanner() ?>
	
	<div class="min-h-screen center-page">
		<div class="w-5/6 center-container self-center p-10">
			<h2> Login </h2>
	
			<!-- Reusable functional component -->
			<form action="login_post.php" method="post">
				<p>Username</p>
				<input type="text" name="username" required>
				<p>Password</p>
				<input type="password" name="password" required>
	
				<br><br>
				<button> Submit </button>
			</form>
			<div>
				<p> Don't have an account? <a href="./register.php"> Register </a></p>
			</div>
		</div>
	</div>

	<!-- Raw included footer -->
	<?php include '../../components/footer.php'?>
</body>
</html>


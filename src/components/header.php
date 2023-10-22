<?php
$navButtonClass = "m-2 font-semibold text-blue-600 border-2 p-2 rounded-md";
?>

<html lang="en">
<header class="flex flex-col justify-start items-stretch md:flex-row md:justify-between border-b-2 border-b-black">
	<div class="flex justify-center items-center">
		<img class="w-5 m-2" src="/favicon.ico" alt="">
		<p class="text-lg font-bold uppercase"> Project Name </p>
	</div>
	<div class="flex flex-col justify-start items-stretch text-center md:flex-row md:justify-between">
		<a class="<?php echo $navButtonClass ?>" href="/">Dashboard</a>
		<a class="<?php echo $navButtonClass ?>" href="/src/pages/authentication/profile.php">Profile</a>
		<a class="<?php echo $navButtonClass ?>" href="/src/pages/authentication/login.php">Login</a>
		<a class="<?php echo $navButtonClass ?>" href="/src/pages/authentication/register.php">Register</a>
		<a class="<?php echo $navButtonClass ?>" href="/src/pages/authentication/logout.php">Logout</a>
	</div>
</header>

</html>

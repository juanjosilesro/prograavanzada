<?php
	session_start();
?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
<title>Super Awesome Title!</title>
<meta charset = "UTF-8"/>
<link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
				
			</ul>
			<ul>
		
				
			</ul>
			
			<div class="nav-login">
			<a href="newquestioninterfaz.php">admin</a>
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Registrate</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>
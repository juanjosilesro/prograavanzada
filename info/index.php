<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<h2><a href="preguntas.html" height="100px">php</a></h2>
		<center>
		<img src="images/php.jpg" height="500px" >

	
		</center>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "ya estas logeeado!";
			}
		?>
	</div>
</section>
<?php
	include_once 'footer.php';
?>
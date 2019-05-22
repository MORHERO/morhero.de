<?php 

$page_title = "MORHERO";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo($page_title); ?></title>
	<?php include("templates/styles.php"); ?>
</head>
<body>
	<?php include("templates/header.php"); ?>
	<?php include("templates/navigation.php"); ?>
	<main id="content">
		<?php include("templates/content/intro.php"); ?>

		<section id="projects">
			<div class="inner">
				
			</div>
		</section>

		<?php include("templates/content/social-wall.php"); ?>

		<section id="support">
			<div class="inner">

			</div>
		</section>

		<?php include("templates/content/contact.php"); ?>

	<a href="http://localhost/morhero.de/projects.php">Projects</a>
	</main>
	<?php include("templates/footer.php"); ?>
	<?php include("templates/scripts.php"); ?>
</body>
</html>
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

		<?php include("templates/content/challenge.php"); ?>

		<?php include("templates/content/showcase.php"); ?>

		<?php include("templates/content/contact.php"); ?>

	<?php include("templates/footer.php"); ?>
	<?php include("templates/scripts.php"); ?>
</body>
</html>
<?php 

$page_title = "MORHERO";
$url = "https://morhero.de/";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo($page_title); ?></title>
	<meta charset="utf-8">
	<meta name="description" content="Welcome to my Webpage. View my projects and how to contact me. ">
	<meta name="author" content="MORHERO">
	<meta property="og:title" content="MORHERO - Everything you need to know about me!">
	<meta property="og:image" content="<?php echo($url); ?>assets/media/img/setup.jpg">
	<meta property="og:description" content="View my projects and how to contact me. Most of my projects are Open Source and completly free to use.">
	<?php include("templates/styles.php"); ?>
</head>
<body id="t">
	<?php include("templates/header.php"); ?>
	<?php include("templates/info-dock.php"); ?>
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
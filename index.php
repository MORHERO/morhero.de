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

		<section id="project-showcase">
			<h2 class="section-headline">Project Showcase</h2>
			<div class="inner">
				<div class="showcase">
					<div class="imgbox">
						<img src="assets/media/img/prototype/1000x1000.png">
					</div>
					<div class="textbox">
						<h3>Project name</h3>
						<p>das ist ein inhalts text das ist ein inhalts text das ist ein inhalts text das ist ein inhalts text das ist ein inhalts text das ist ein inhalts text das ist ein inhalts text

						ein inhalts text das ist ein inhalts text das ist ein inhalts text das ist ein inhalts text</p>
					</div>
				</div>
				<div class="project-nav">
					<?php 
					$nav_list = array('100x100.png','100x100.png','100x100.png','100x100.png');

					foreach ($nav_list as $key => $img_name) { ?>
						
							<div class="element <?php echo(($key == 0)? "active": ""); ?>">
								<div class="wrap">
									<img src="assets/media/img/prototype/<?php echo($img_name); ?>">
								</div>
							</div>
						
					<?php }?>
				</div>
			</div>
		</section>

		<section id="support">

		</section>

		<?php include("templates/content/contact.php"); ?>

	<a href="http://localhost/morhero.de/projects.php">Projects</a>
	</main>
	<?php include("templates/footer.php"); ?>
	<?php include("templates/scripts.php"); ?>
</body>
</html>
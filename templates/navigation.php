<?php
	$url_l = "";
	$scroll = "scroll";
	if($page_title != "MORHERO") {
		$url_l = "https://morhero.de/index.php";
		$scroll = "";
	}

	$nav_points = array (
		array (
			'name' => 'Home' , 'slug' => 'home', 'url' => $url_l. '#t', 'icon' => 'home.svg'
		),
		array (
			'name' => 'About me' , 'slug' => 'intro', 'url' => $url_l . '#intro', 'icon' => 'info.svg'
		),
		array (
			'name' => 'Challenge' , 'slug' => 'challenge', 'url' => $url_l . '#challenge', 'icon' => 'clock.svg'
		),
		array (
			'name' => 'Projects' , 'slug' => 'showcase', 'url' => $url_l . '#showcase', 'icon' => 'code.svg'
		),
		array (
			'name' => 'Contact' , 'slug' => 'contact', 'url' => $url_l . '#contact', 'icon' => 'send.svg'
		)
	);

?>
<nav id="navigation">
	<div class="inner">
		<?php foreach ($nav_points as $key => $e) { ?>
			<div id="nav_<?php echo($e['slug']); ?>" class="element">
				<a class="inner <?php echo $scroll ?>" href="<?php echo($e['url']); ?>">
					<img src="<?php echo($url); ?>assets/media/img/icon/<?php echo($e['icon']); ?>">
					<p><?php echo($e['name']); ?></p>
				</a>
			</div>
		<?php } ?>
		
		
	</div>
</nav>
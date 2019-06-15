<section id="contact">
	<h2 class="section-headline">Contact me</h2>
	<div class="platform-list">
		<?php 
		$contacts = array(
			array('title' => 'id/morhero','img' => 'Steam_Logo.svg', 'link' => 'https://steamcommunity.com/id/morhero'),
			array('title' => '/morhero','img' => 'Twitter_Logo_Blue.svg', 'link' => 'https://twitter.com/morhero'),
			array('title' => '/MORHERO','img' => 'github.svg', 'link' => 'https://github.com/MORHERO'),
			array('title' => '/morhero', 'img' => 'Glitch.svg', 'link' => 'https://www.twitch.tv/morhero')
		);
		foreach ($contacts as $key => $platform) { ?>
			<div class="element">
				<a href="<?php echo($platform['link']); ?>">
					<img src="<?php echo($url); ?>assets/media/img/icon/<?php echo($platform['img']); ?>">
					<p><?php echo($platform['title']); ?></p>
				</a>
			</div>
		<?php } ?>
	</div>
	<div class="direct">
		<h3 class="part-headline">Send me a mail</h3>
		<div class="mail-list">
			<div class="wrap">
				<?php 
				$mails = array(
					array('title' => 'Bugs & Problems', 'mail' => 'dev@morhero.de', 'description' => 'Found a bug or problem in one of my projects? Please send me a short description of the problem and how it occures.', 'img' => 'alert-triangle.svg'),
					array('title' => 'Main Contact', 'mail' => 'contact@morhero.de', 'description' => 'Want to get in touch with me? Send me a mail or contact me over a social media of your choise.', 'img' => 'send.svg'),
					array('title' => 'harrasment', 'mail' => 'spam@morhero.de', 'description' => 'Send all your bullshit and harrasments to this mail,please. Don´t worry i will make sure your mail will get immediately deleted.', 'img' => 'meh.svg' )
				);
				foreach ($mails as $key => $mail) { ?>
					
					<div class="element">
						<div>
							<img src="<?php echo($url); ?>assets/media/img/icon/<?php echo($mail['img']); ?>">
						</div>
						<div>
							<h4><?php echo($mail['title']); ?></h4>
							<p><?php echo($mail['description']); ?></p>
							<span class="click-copy"><?php echo($mail['mail']); ?></span><span> (Copy on Click)</span>
						</div>
						
						
					</div>

				<?php } ?>
			</div>
		</div>
	</div>
</section>
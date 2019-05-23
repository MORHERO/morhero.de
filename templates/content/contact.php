<section id="contact">
	<h2 class="section-headline">Contact me</h2>
	<div class="platform-list">
		<?php 
		$contacts = array(
			array('title' => '/morhero','img' => '100x100.png', 'link' => ''),
			array('title' => '/morhero2','img' => '100x100.png', 'link' => ''),
			array('title' => '/morhero3','img' => '100x100.png', 'link' => ''),
			array('title' => '/morhero4','img' => '100x100.png', 'link' => ''),
			array('title' => '/morhero5','img' => '100x100.png', 'link' => '')
		);
		foreach ($contacts as $key => $platform) { ?>
			<div class="element">
				<a href="<?php echo($platform['link']); ?>">
					<img src="assets/media/img/prototype/<?php echo($platform['img']); ?>">
					<p><?php echo($platform['title']); ?></p>
				</a>
			</div>
		<?php } ?>
	</div>
	<div class="direct">
		<h3>Send me a mail</h3>
		<div class="mail-list">
			<div class="wrap">
				<?php 
				$mails = array(
					array('title' => 'Bugs & Problems', 'mail' => 'dev@morhero.de', 'description' => 'Lorem ipsum idont care amet sit dolor ipsum', 'img' => '100x100.png'),
					array('title' => 'Help', 'mail' => 'support@morhero.de', 'description' => 'Lorem ipsum idont care amet sit dolor ipsum', 'img' => '100x100.png'),
					array('title' => 'Casual talking', 'mail' => 'contact@morhero.de', 'description' => 'Lorem ipsum idont care amet sit dolor ipsum', 'img' => '100x100.png'),
					array('title' => 'geschäftlich', 'mail' => 'bussiness@morhero.de', 'description' => 'Lorem ipsum idont care amet sit dolor ipsum', 'img' => '100x100.png'),
					array('title' => 'harrasment', 'mail' => 'spam@morhero.de', 'description' => 'Lorem ipsum idont care amet sit dolor ipsum', 'img' => '100x100.png' )
				);
				foreach ($mails as $key => $mail) { ?>
					
					<div class="element">
						<div>
							<img src="assets/media/img/prototype/<?php echo($mail['img']); ?>">
						</div>
						<div>
							<h4><?php echo($mail['title']); ?></h4>
							<p><?php echo($mail['description']); ?></p>
							<span mail="<?php echo($mail['mail']); ?>"><?php echo($mail['mail']); ?> (Copy on Click)</span>
						</div>
						
						
					</div>

				<?php } ?>
			</div>
		</div>
	</div>
</section>
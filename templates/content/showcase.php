<section id="showcase">
    <h2 class="section-headline">Project Showcase</h2>
    <div class="inner">
        <div class="show-list">
            <?php
                $p_list = array(
                    array(
                        'title' => 'morhero.de',
                        'descr' => 'This project is my personal website. In fact you are currently watching this page. So any description is probably unnecessary.',
                        'slug' => 'morhero-de'),
                    array(
                        'title' => 'Bugclicker',
                        'descr' => 'You love Clicker games? You love ASCII art? And you are interrested in programming? Then this game will be perfect for you! Bugclicker is a browser clicker game based on the daily struggles of a programmer.',
                        'slug' => 'bugclicker'),
                    array(
                        'title' => 'Guarded Worlds',
                        'descr' => 'This project is a little different to my other projects. It´s my only writing project.<br/>Under the name Guarded Worlds im building a whole universe with different Planets and Creatures.<br/>The main goal is to create amazing worlds for Roleplay games.',
                        'slug' => 'guarded-worlds'),
                );
            ?>
            <?php foreach ($p_list as $key => $p) { ?>
                <div class="showcase <?php if($key == 0){echo('active');} ?>">
                    <div class="imgbox" style="background-image: url(<?php echo($url); ?>assets/media/img/project/<?php echo($p['slug']); ?>/title.jpg);"></div>
                    <div class="textbox">
                        <h3><?php echo($p['title']); ?></h3>
                        <p><?php echo($p['descr']); ?></p>
                        <a href="<?php echo($url); ?>project/<?php echo($p['slug']); ?>/" class="btn">>..Read more</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="project-nav">
            <?php 
            $nav_list = array('morhero-de/thumb.jpg','bugclicker/thumb.jpg','guarded-worlds/thumb.jpg');

            foreach ($nav_list as $key => $img_name) { ?>
                
                    <div class="element <?php echo(($key == 0)? "active": ""); ?>" data-pos="<?php echo($key); ?>">
                        <div class="wrap">
                            <img src="<?php echo($url); ?>assets/media/img/project/<?php echo($img_name); ?>">
                        </div>
                    </div>
                
            <?php }?>
        </div>
        <div class="view">
             <div class="wrap">
                <a href="<?php echo($url); ?>projects.php" class="btn">View more Projects</a>
            </div>
        </div>
    </div>
</section>
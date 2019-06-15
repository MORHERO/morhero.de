<?php 

$page_title = "PROJECTS";
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
<body>
    <?php include("templates/header.php"); ?>
    <?php include("templates/info-dock.php"); ?>
    <?php include("templates/navigation.php"); ?>
    <main id="content">
        <h2>Project List</h2>
        <section class="project-list">
            <?php 
                /*
                    Tag colors:
                        Versions: g => green
                        working status: y => yellow
                        planned: o => orange
                        done: g => green
                        type web: dg => dark grey
                        type writing: lg => light grey
                        other things b => blue
                */
                $url_p = "http://localhost/morhero.de/project/";
                $project_list = array(
                    array('name' => 'morhero.de',
                        'content' => 'My personal website where I share my projects and general informations about myself.',
                        'url' => $url_p . 'morhero-de/',
                        'slug' => 'morhero-de',
                        'tags' => array(
                            array('name' => 'v1.0' , 'class' => 'g'),
                            array('name' => 'inDev' , 'class' => 'y'),
                            array('name' => 'web' , 'class' => 'dg')
                        )),
                    array('name' => 'Bugclicker',
                        'content' => 'Browser based clickergame with ascii art and programming as theme.',
                        'url' => $url_p . 'bugclicker/',
                        'slug' => 'bugclicker',
                        'tags' => array(
                            array('name' => 'inDev' , 'class' => 'y'),
                            array('name' => 'web' , 'class' => 'dg')
                        )),
                    array('name' => 'Guarded Worlds',
                        'content' => 'Worldbuilding project about different planets and scenarios.',
                        'url' => $url_p . 'guarded-worlds/',
                        'slug' => 'guarded-worlds',
                        'tags' => array(
                            array('name' => 'planned' , 'class' => 'o'),
                            array('name' => 'writing' , 'class' => 'lg')
                        )),
                    array('name' => 'Guarded Worlds - Rulebook',
                        'content' => 'Pen&Paper Rulebook in the Guarded Worlds Scenario.',
                        'url' => $url_p . 'guarded-worlds-rulebook/',
                        'slug' => 'guarded-worlds-rulebook',
                        'tags' => array(
                            array('name' => 'planned' , 'class' => 'o'),
                            array('name' => 'writing' , 'class' => 'lg')
                        )),
                    array('name' => '13kb Game demo',
                        'content' => 'Practice to create a small sized Browser game.',
                        'url' => $url_p . '13kb-demo/',
                        'slug' => '13kb-demo',
                        'tags' => array(
                            array('name' => 'planned' , 'class' => 'o'),
                            array('name' => 'web' , 'class' => 'dg')
                        ))
                );

                foreach ($project_list as $key => $project) { ?>
                    <div class="element" style="background-image:linear-gradient(black, black), url('<?php echo($url . "assets/media/img/project/" . $project['slug'] ); ?>/title.jpg');">
                        <a href="<?php echo($project['url']); ?>">
                            <div class="inner">
                                <h3><?php echo($project['name']); ?></h3>
                                <p class="description"><?php echo($project['content']); ?></p>
                                <div class="taglist">
                                    <?php foreach ($project["tags"] as $tkey => $tag) { ?>
                                        <span class="tag <?php echo($tag['class']); ?>"><?php echo($tag['name']); ?></span>
                                    <?php } ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
        </section>

    </main>
    <?php include("templates/footer.php"); ?>
    <?php include("templates/scripts.php"); ?>
</body>
</html>
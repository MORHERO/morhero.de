<?php 

$page_title = "Guarded Worlds";
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
    <?php include("../../templates/styles.php"); ?>
</head>
<body id="t">
    <?php include("../../templates/header.php"); ?>
    <?php include("../../templates/info-dock.php"); ?>
    <?php include("../../templates/navigation.php"); ?>
    <main id="content">
        
        <section>
            <div class="img-text-block">
                <div class="inner">
                    <div class="img-box">
                        <img src="<?php echo($url); ?>/assets/media/img/project/guarded-worlds/title.jpg">
                    </div>
                    <div class="text-box">
                        <p>
                            Guarded Worlds is my Worldbuilding project. At the moment it is still in the planning phase. Collecting some ideas what I want to write and what it should contain.<br/><br/>
                            In the name of Guarded Worlds i will create different Planets and scenarios to use in Roleplaying games.<br/><br/>
                            These Worlds will include Magic worlds, Sci-Fi Worlds and many more. First of all I will start with a World that includes a conflict between a Magic fraction and a non Magic fraction.<br/><br/>
                            Im also planning to stream some of my worldbuilding progress. I´m relativ new to this so I hope I can help someone as well people can help me building these worlds.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("../../templates/content/contact.php"); ?>

    <?php include("../../templates/footer.php"); ?>
    <?php include("../../templates/scripts.php"); ?>
</body>
</html>
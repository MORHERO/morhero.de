<?php 

$page_title = "Guarded Worlds - Rulebook";
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
                            The Rulebook of Guarded Worlds will be the way how to play a Pen & Paper session in the Guarded Worlds Scenario. I will write this together with Guarded Worlds itself. <br/><br/>
                            The reason im creating my own Rulebook is because of the many different Scenarios that could take place in Guarded Worlds. There will be specific Rules with different Scenarios.<br/><br/>
                            Whats also different with my Rulebook are the degrees of difficulty. The players can choose from a simple and small set of Rules to just enjoy the Worlds and there stories. Or could take a big ruleset that will make everything more realistic and harder to master.<br/><br/>
                            At first I will probably write everything in German. Just because its simpler for me. Later on I will translate everything also in English. 
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
<?php 

$page_title = "Bugclicker";
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
<body>
    <?php include("../../templates/header.php"); ?>
    <?php include("../../templates/info-dock.php"); ?>
    <?php include("../../templates/navigation.php"); ?>
    <main id="content">
        
        <section>
            <div class="img-text-block">
                <div class="inner">
                    <div class="img-box">
                        <img src="<?php echo($url); ?>/assets/media/img/project/bugclicker/title.jpg">
                    </div>
                    <div class="text-box">
                        <p>
                            Bugclicker is one of my long term projects i started around 5 years ago. But never truly stick to it to create a finished version i could put online.<br/><br/>
                            I´m currently building on the first Beta version on the Bugclicker but what exactly is a Bugclicker?<br/><br/>
                            It´s a Clicker Browser Game. The goal is to create a combination of the <a href="http://orteil.dashnet.org/cookieclicker/">Cookie Clicker</a> and <a href="https://candybox2.github.io/">CandyBox</a> because I just love these two games. Cookie Clicker is just one of the best and funniest clicker games and CandyBox is such a amazing combination of waiting and roleplay game with awesome ascii art.<br/><br/>
                            The basic idea of Buglicker is that your, the player, are a programmer that just fixes bugs. The more Bugs you fix the more money you get. More complex bugs take longer but give a higher reward. After some time you will have enough money to hire some workers to fix your Bugs. But with having helping hands you will get more other responsibilities.<br/><br/>
                            Bugclicker is completly Open Source and available on my github. I will appreciate everyone that will help me with any project!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include("../../templates/content/contact.php"); ?>
    </main>
    <?php include("../../templates/footer.php"); ?>
    <?php include("../../templates/scripts.php"); ?>
</body>
</html>
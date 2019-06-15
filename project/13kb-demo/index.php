<?php 

$page_title = "13kb Demo";
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
                    <div class="">
                        <p>
                            The 13kb Demo will be one of my next Challenges I will do. It will be a practice for my before the <a href="https://js13kgames.com/">js13kgames</a> take place.<br/><br/>
                            js13kgames is a coding competition to build a browser game with the maximum size of 13kb in one month.<br/><br/>
                            Thats why I will build the month before this competition I will create a little Demo to learn the basics what I need to know to make a even better game at js13kgames.
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
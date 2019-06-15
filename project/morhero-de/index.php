<?php 

$page_title = "morhero.de";
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
                        <img src="<?php echo($url); ?>/assets/media/img/project/morhero-de/title.jpg">
                    </div>
                    <div class="text-box">
                        <p>
                            morhero.de is my personal website where you can get informations about my projects and there status.<br/><br/>
                            This page is still in Beta so if you find Problems and Bugs please report them via Mail("dev@morhero.de") or fix it yourself and send me a pull request on <a href="https://github.com/MORHERO/morhero.de/tree/static">github</a> (The static page is in the static branch).<br/><br/>
                            At the moment morhero.de is a static website. The next step is to add the backend <a href="https://getgrav.org/">grav</a>.<br/><br/>
                            morhero.de was build as my first monthly challenge to find a good way to achieve these challenges. <br/><br/>
                            Story Time: morhero.de was planned for around 9 years but I completly overthinked it. I just did to many features and Ideas into the page that I never finished it.<br/>
                            To finally create something I could put online I wiped the whole project and started from scratch with no design or Idea and created this current state.<br/>
                            It could have get worse on these conditions if you ask me but its deffinitly not perfect. Thats also one reason why this website will be constantly in development.
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
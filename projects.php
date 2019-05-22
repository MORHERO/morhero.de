<?php 

$page_title = "PROJECTS";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo($page_title); ?></title>
    <?php include("templates/styles.php"); ?>
</head>
<body>
    <?php include("templates/header.php"); ?>
    <?php include("templates/navigation.php"); ?>
    <main id="content">

        <section id="project-list">

            <?php 
                $project_list = array(
                    array('name' => 'Project 1', 'content' => 'Lorem ipsum dolor sit amet! Bla bla thats a description text and i dont know what im doing here so help me please this is shit....'),
                    array('name' => 'Project 2', 'content' => 'Lorem ipsum dolor sit amet! Bla bla thats a description text and i dont know what im doing here so help me please this is shit....'),
                    array('name' => 'Project 3', 'content' => 'Lorem ipsum dolor sit amet! Bla bla thats a description text and i dont know what im doing here so help me please this is shit....'),
                    array('name' => 'Project 4', 'content' => 'Lorem ipsum dolor sit amet! Bla bla thats a description text and i dont know what im doing here so help me please this is shit....'),
                    array('name' => 'Project 5', 'content' => 'Lorem ipsum dolor sit amet! Bla bla thats a description text and i dont know what im doing here so help me please this is shit....'),
                    array('name' => 'Project 6', 'content' => 'Lorem ipsum dolor sit amet! Bla bla thats a description text and i dont know what im doing here so help me please this is shit....'),
                    array('name' => 'Project 7', 'content' => 'Lorem ipsum dolor sit amet! Bla bla thats a description text and i dont know what im doing here so help me please this is shit....')
                );

                foreach ($project_list as $key => $project) { ?>

                    <div class="element">
                        <a href="http://localhost/morhero.de/project_name/index.php">
                            <div class="inner">
                                <h3><?php echo($project['name']); ?></h3>
                                <p class="description"><?php echo($project['content']); ?></p>
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
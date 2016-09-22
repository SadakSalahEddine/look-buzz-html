<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home </title>

        <?php include './include/scripts_css.php'; ?>

    </head><!--/head-->

    <body>

        <?php include './include/header.php'; ?>  
        <?php include './include/search.php'; ?>  

        <div class="container">
            <?php include './include/left_menu.php'; ?> 

            <?php
            if (isset($_GET['url'])) {
                if ($_GET['url'] == "pictures") {
                    include './include/galerie.php';
                }  elseif ($_GET['url'] == "details") {
                    include './include/details.php';
                }elseif ($_GET['url'] == "contact") {
                    include './include/contact.php';
                }
            } else {
                include './include/home_container.php';
            }
            ?>  
        </div>        



<?php include './include/social.php'; ?>  
        <?php include './include/footer.php'; ?>  
        <?php include './include/scripts_js.php'; ?> 
    </body>
</html>

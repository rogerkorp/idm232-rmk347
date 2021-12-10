<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <?php
        include_once 'navigation.php';

    

        ?>

            <main id="search-page">
                
                <?php
                include 'category-item.php'

                ?>  
            </main>

        <?php

        include 'footer.php'
        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categories</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <?php
        include_once 'navigation.php'
        ?>

        <h1 class="page-head">Catergories</h1>
            <main id="cat-list">
                <?php
                include 'cat.php';
                include 'cat.php';
                include 'cat.php';
                include 'cat.php';
                include 'cat.php';
                include 'cat.php';
                include 'cat.php';
                include 'cat.php';
                include 'cat.php';
                ?>
            </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
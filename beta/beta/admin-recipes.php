<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recipe List</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    </head>
    <body id="admin-body">
        <?php
        include_once 'admin-nav.php'
        ?>
        <main class="admin-main">
        <h1 class="admin-header">Recipe List</h1>
        <button type="button" id="add-recipe">+ Add Recipe</button>
            <?php
                include 'admin-recipe.php';
                include 'admin-recipe.php';
                include 'admin-recipe.php';
                include 'admin-recipe.php';
                include 'admin-recipe.php';
            ?>
        </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
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
        <a href="edit-recipe.php" id="add-recipe">+ Add Recipe</a>
            <?php
                include 'admin-recipe.php';
                mysqli_free_result($name_result);
                mysqli_close($db_connection);
            ?>

        </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
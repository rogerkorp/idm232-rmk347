<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Recipe</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    </head>
    <body id="admin-body">
        <?php
        include_once 'admin-nav.php'
        ?>
        <main class="admin-main">
        <h1 class="admin-header">Edit Recipe</h1>
        <button type="button" id="edit-recipe">Save</button>
        <form id="recipe-form">
            <input type="text" id="r-title" name="r-title"><br>
            <input type="file" id="r-photo-thumb" name="r-photo-thumb"><br>
            <input type="text" id="r-time" name="r-time"><br>
            <input type="text" id="r-serving" name="r-serving"><br>
            <br>

            <h2>Ingredients</h2>
            <input type="text" class="longtext" id="r-ingredients" name="r-ingredients"><br>
            <br>

            <h2>Step 1</h2>
            <input type="text" class="longtext"  id="r-step" name="r-step"><br>
            <input type="file" id="r-photo-s1" name="r-photo-s1"><br>
            <button type="button" id="add-step">+ Add Step</button>
        </form>



        </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
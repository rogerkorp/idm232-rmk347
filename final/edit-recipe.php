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
        <h1 class="admin-header">Add Recipe</h1>
        
        <form action='process-recipe.php' id='recipe-form' method='post' enctype="multipart/form-data"> <!-- You need to add this enctype when dealing with files, because otherwise you will get security error. It's pretty standard. -->
            <input type='text' id='name' name='name' placeholder='Recipe Name'><br>
            <input type='text' id='cooking-time' name='cooking-time' placeholder='Minutes to Bake'><br>
            <input type='text' id='serving-amount' name='serving-amount' placeholder='Makes how many Servings?'><br>
            <input type='text' id='category' name='category' placeholder='Breakfast, Lunch, Dinner, or Dessert?'><br>
            <br>
            <label for="">Image</label>
            <input type='file' value='' name='image'><br>

            <br>
            <h2>Ingredients</h2>
            <textarea type='text' class='longtext' id='ingredients' name='ingredients' rows="10" cols="100" placeholder='List of ingredients...'></textarea><br>
            <h2>Instructions</h2>
            <textarea type='text' class='longtext'  id='instructions' name='instructions' rows="10" cols="100" placeholder='Cooking directions...'></textarea><br>
            <br>
            <input type='submit' name='edit-recipe'>
        </form>

        </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
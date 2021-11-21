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
        
        <form action='process-recipe.php' id='recipe-form' method='post'>
            <input type='text' id='name' name='name' placeholder='Recipe Name'><br>
            <input type='text' id='cooking-time' name='cooking-time' placeholder='Minutes to Bake'><br>
            <input type='text' id='serving-amount' name='serving-amount' placeholder='Makes how many Servings?'><br>
            <br>
            <h2>Ingredients</h2>
            <input type='text' class='longtext' id='ingredients' name='ingredients' placeholder='List of ingredients...'><br>
            <h2>Instructions</h2>
            <input type='text' class='longtext'  id='instructions' name='instructions' placeholder='Cooking directions...'><br>
            <br>
            <input type='submit' name='edit-recipe'>
        </form>



        </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
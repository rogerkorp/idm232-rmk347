<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Recipe</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    </head>
    <body id="admin-body">
        <?php
        include_once 'admin-nav.php'
        ?>
        <main class="admin-main">
        <h1 class="admin-header">Update Recipe</h1>

        <?php
            $id = mysqli_real_escape_string($db_connection, $_POST['id']);
            $update_query = "SELECT * FROM recipes WHERE ID = '$id'"; //Asks for the database to Select all results from recipes
            $update_result = mysqli_query($db_connection, $update_query);
            if (!$update_result){
                die("Database query failed.");
            }
        ?>
        
        <?php
        while($row = mysqli_fetch_assoc($update_result)){
             echo   '<form action="updating-recipe.php" id="recipe-form" method="post">';
             echo   '<input type="hidden" name="id" value=' . $row['id'] . '>';
             echo   '<input type="text" id="name" name="name" value="' .  $row['name'] . '"placeholder="Recipe Name"><br>';
             echo   '<input type="text" id="cooking-time" name="cooking-time" value="' . $row['cooking-time'] .'" placeholder="Minutes to Bake"><br>';
             echo   '<input type="text" id="serving-amount" name="serving-amount" value="' .  $row['serving-amount'] .'" placeholder="Makes how many Servings?"><br>';
             echo   '<input type="text" id="category" name="category" value="' . $row['category'] . '"><br>';
             echo   '<br>';
             echo   '<h2>Ingredients</h2>';
             echo   '<input type="text" class="longtext" id="ingredients"  rows="30" cols="10" name="ingredients" value="' . $row['ingredients'] .'" placeholder="List of ingredients..."><br>';
             echo   '<h2>Instructions</h2>';
             echo   '<input type="text" class="longtext"  id="instructions" rows="30" cols="10" name="instructions" value="'.  $row['instructions'] .'" placeholder="Cooking directions..."><br>';
             echo   '<br>';
             echo   '<input type="submit" name="update-recipe">';
           echo '</form>';
        }   
            ?>
        </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recipe Template</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    </head>
    <body>

        <?php
        include_once 'navigation.php';
            $id = mysqli_real_escape_string($db_connection, $_POST['id']);
            $recipe_query = "SELECT * FROM recipes WHERE ID = '$id'"; //Asks for the database to Select all results from recipes
            $recipe_result = mysqli_query($db_connection, $recipe_query);
            if (!$recipe_result){
                die("Database query failed.");
            }
        ?>
        <?php
        while($row = mysqli_fetch_assoc($recipe_result)){
            echo "<section class='recipe-header'>";
            echo  "<h1>" . $row['name'] . "</h1>";
            echo  "<h2> Cook Time: " . $row['name'] . " Minutes. </h2>";
            echo  "<h2> Serves: " . $row['serving-amount']; 
            echo  "<img src='https://via.placeholder.com/600x300' alt='placeholder image'></img>";
            echo "</section>";
            echo "<section class='recipe'>";
            echo "<h1>Ingredients</h1>";
            echo $row['ingredients'];
            echo "</section>";
            echo "<section class='recipe'>";
            echo "<h1>Instructions</h1>";
            echo $row['instructions'];
            echo "<img src='https://via.placeholder.com/600x300' alt='placeholder image'></img>";
            echo "</section>";
        }
        mysqli_free_result($recipe_result);
    ?>



        <?php
        include 'footer.php'
        ?>
    </body>
</html>
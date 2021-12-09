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

        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $recipe_query = "SELECT * FROM recipes WHERE ID = '$id'";
        }

            $recipe_results = mysqli_query($db_connection, $recipe_query);
            if ($recipe_results && $recipe_results->num_rows > 0){
                $data = mysqli_fetch_assoc($recipe_results);
            } else {
                !die;
            }
            
        ?>
        
            <section class='recipe-header'>
                <h1><?php echo $data['name'];?></h1>
                <h2>Cook Time: <?php echo $data['cooking-time'];?> Minutes.</h2>
                <h2> Serves: <?php echo $data['serving-amount'];?></h2>
                <img src='https://via.placeholder.com/600x300' alt='placeholder image'></img>
            </section>
            <section class='recipe'>
                <h1>Ingredients</h1>
                <?php echo $data['ingredients'];?>
            </section>
            <section class='recipe'>
                <h1>Instructions</h1>
                <?php echo $data['instructions']; ?>
                <img src='https://via.placeholder.com/600x300' alt='placeholder image'></img>
            </section>"
        }
    

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
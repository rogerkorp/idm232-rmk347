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
        include_once 'navigation.php'
        ?>

        <section class="recipe-header">
            <h1>Recipe Name</h1>
            <h2>Cook Time: XX Minutes</h2>
            <h2>Serves X</h2>
            <img src="https://via.placeholder.com/600x300" alt="placeholder image"></img>
        </section>

        <section class="recipe">
            <h1>Ingredients</h1>
            <ul>
                <li>Item Number 1</li>
                <li>Item Number 2</li>
                <li>Item Number 3</li>
            </ul>
        </section>

        <section class="recipe">
            <h1>Step 1</h1>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae rutrum nulla. Aliquam lobortis lobortis dui, eget semper justo tempor at.
            <img src="https://via.placeholder.com/600x300" alt="placeholder image"></img>
        </section>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
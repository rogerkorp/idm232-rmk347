
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
            <div class="cat">
                <img src="assets/breakfast.png">
                <a href="category-list.php?category=Breakfast"><h2> Breakfast </h2></a>
            </div>
            <div class="cat">
                <img src="assets/lunch.png">
                <a href="category-list.php?category=Lunch"><h2> Lunch </h2></a>
            </div>
            <div class="cat">
                <img src="assets/dinner.png">
                <a href="category-list.php?category=Dinner"><h2> Dinner </h2></a>
            </div>
            <div class="cat">
                <img src="assets/dessert.png">
                <a href="category-list.php?category=Dessert"><h2> Dessert </h2></a>
            </div>
            </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
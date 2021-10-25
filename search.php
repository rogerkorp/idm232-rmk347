<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search</title>
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <?php
        include_once 'navigation.php'
        ?>

        <h1 class="page-head">Search</h1>
            <main id="search-page">
                <form id="search-box">
                    <input type="text" id="search" name="search">
                    <input type="submit" id="go-button" value="Go">
                </form>
                <?php
                include 'search-result.php';
                include 'search-result.php';
                include 'search-result.php';
                include 'search-result.php';
                ?>  
            </main>

        <?php
        include 'footer.php'
        ?>
    </body>
</html>
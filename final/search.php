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
        include_once 'navigation.php';

        if (isset($_GET['search'])){ //checks to see if the keyword is set
            $search = $_GET['search'];
            $use_result = search_recipes($search);
        } else {
            $use_result = null;
        }

        function search_recipes($search){
            global $db_connection;
            $query = "SELECT * FROM recipes WHERE name LIKE '%" . $search . "%'";
            $result = mysqli_query($db_connection, $query);
            if ($result && $result-> num_rows > 0){
                $results = $result;
            } else {
                $results = null;
            }
            return $results;
        }
    

        ?>

        <h1 class="page-head">Search</h1>
            <main id="search-page">
                <form id="search-box" action="" method="get">
                    <input type="text" id="search" name="search"
                    value="<?php echo @$_GET['search']; ?>">
                    <input type="submit" id="go-button" value="Go">
                </form>
                <?php

                    if ($use_result) {
                        include 'search-result.php';
                    } 

                ?>  
            </main>

        <?php

        include 'footer.php'
        ?>
    </body>
</html>
<?php

    if (isset($_GET['category'])){
        $category = $_GET['category'];
    }

    $cat_query = "SELECT * FROM recipes WHERE  category = '$category'";; //Asks for the database to Select all results from recipes
    $cat_result = mysqli_query($db_connection, $cat_query);
    if (!$cat_result){
        echo 'test';
        die("Database query failed.");
    }
?>
    
    
<?php

    while ($row = mysqli_fetch_assoc($cat_result)) {
              echo '<div class="search-result">';
              echo '<div id="search-details">';
              echo '<a href="recipe.php?id=' . $row['id'] . '"><h1 id="search-title">' . $row['name'] . '</h1></a>';
              echo '<h2 id="search-description">Cook Time: ' . $row['cooking-time'] . ' Minutes. Serves ' . $row['serving-amount'] . '</h2>';
              echo '</div>';
              echo '</div>';
          }
?> 

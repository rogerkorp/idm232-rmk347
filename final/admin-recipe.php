<?php
    $name_query = "SELECT * FROM recipes"; //Asks for the database to Select all results from recipes
    $name_result = mysqli_query($db_connection, $name_query);
    if (!$name_result){
        die("Database query failed.");
    }
?>


<?php
    while($row = mysqli_fetch_assoc($name_result)){ //creates a loop that will return this data for every entry found in the database
        echo '<div class="admin-recipe">';
        echo $row['name']; //returns the data found in the "name" column.

        // This portion creates a form that passes the ID of the recipe into a POST request that sends you to an editing page.
        echo '<form action="update-recipe.php?id=' . $row['id'] . '" id="update-recipe" method="post">
                <input type="hidden" name="id" value=' . $row['id'] . '>
                <input type="submit" name="update-recipe" value="Edit">
                </form>';
        // This portion creates a form that passes the ID of the recipe into a POST request that marks it for Deletion.
        echo '<form action="process-delete.php" id="delete-recipe" method="post">
                    <input type="hidden" name="id" value=' . $row['id'] . '>
                    <input type="submit" name="delete-recipe" value="Delete">
                    </form>';

        echo '<a href="recipe.php?id=' . $row['id'] . '">View</a>';;
        echo '</div>';
    }
?>
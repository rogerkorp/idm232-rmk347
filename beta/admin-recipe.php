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
        echo $row['name']; //returns the 
        echo '<a>Edit</a>';
        echo '<a>Delete</a>';
        echo '</div>';
    }
?>
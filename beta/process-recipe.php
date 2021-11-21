<?php

include 'connection.php';

if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }

if (isset($_POST['edit-recipe'])) { //looks for a passed form from something named edit-recipe
    //  Parse Data

    $name = mysqli_real_escape_string($db_connection, $_POST['name']);
    $cookingtime = mysqli_real_escape_string($db_connection, $_POST['cooking-time']);
    $servingamount =  mysqli_real_escape_string($db_connection, $_POST['serving-amount']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($db_connection, $_POST['instructions']);
   

    // Build Query
    $query = 'INSERT INTO `recipes`(`name`, `cooking-time`, `serving-amount`, `ingredients`, `instructions`) ';
    $query .= "VALUES ('{$name}', '{$cookingtime}', '{$servingamount}', '{$ingredients}', '{$instructions}')";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        echo "Yay it worked :)";
    } else {
        echo "It didn't work :(";
    }
}

?>
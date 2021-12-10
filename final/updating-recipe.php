<?php

include 'connection.php';

if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }

if (isset($_POST['update-recipe'])) { //looks for a passed form from something named edit-recipe
    //  Parse Data
    
    $id = mysqli_real_escape_string($db_connection, $_POST['id']);
    $name = mysqli_real_escape_string($db_connection, $_POST['name']);
    $cookingtime = mysqli_real_escape_string($db_connection, $_POST['cooking-time']);
    $servingamount =  mysqli_real_escape_string($db_connection, $_POST['serving-amount']);
    $ingredients = mysqli_real_escape_string($db_connection, $_POST['ingredients']);
    $instructions = mysqli_real_escape_string($db_connection, $_POST['instructions']);
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);
   

    // Build Query

    $query = "UPDATE `recipes` SET `name`='{$name}',`cooking-time`='{$cookingtime}',`serving-amount`='{$servingamount}',`ingredients`='{$ingredients}',`instructions`='{$instructions}',`category`='{$category}' WHERE ID = {$id}";


    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
      header('Location: admin-recipes.php');
      die();
    } else {
        echo "It didn't work :(";
    }
}

?>
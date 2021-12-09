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
    $category = mysqli_real_escape_string($db_connection, $_POST['category']);

  //File uploading

    $temp_name = $_FILES['image']['tmp_name'];
    $file_path = $_FILES['image']['name'];
    $file_destination = 'files/' . $file_path;

    $file_query = 'INSERT INTO `files`(`file_path`)';
    $file_query .= "VALUES ('{$file_path}')";

    $db_file_results = mysqli_query($db_connection, $file_query);
    if ($db_file_results) {
        if (move_uploaded_file($temp_name, $file_destination)) {

          $location_query = "SELECT * FROM files WHERE file_path='{$file_path}'";

          $db_location_results = mysqli_query($db_connection, $location_query);
          if ($db_location_results){
            $new_uploaded_file_id = mysqli_fetch_assoc($db_location_results)['id'];
          }
          
        }
    } else {
        echo "Image didn't uploadd :(";
    }
   

    // Uploading into recipes
    $file_id = $new_uploaded_file_id;


    $query = 'INSERT INTO `recipes`(`name`, `cooking-time`, `serving-amount`, `ingredients`, `instructions`, `category`, `file-id`) ';
    $query .= "VALUES ('{$name}', '{$cookingtime}', '{$servingamount}', '{$ingredients}', '{$instructions}', '{$category}', '{$file_id}')";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
      header('Location: admin-recipes.php');
      die();
    } else {
        echo "Query didn't work";
    }
  

  }
?>

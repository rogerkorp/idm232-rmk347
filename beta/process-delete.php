<?php

include 'connection.php';

if (mysqli_connect_errno()) {
    die ("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }

if (isset($_POST['delete-recipe'])) {
    
    $id = mysqli_real_escape_string($db_connection, $_POST['id']);
        // Build Query
        $query = 'DELETE ';
        $query .= 'FROM recipes ';
        $query .= 'WHERE id=' . $id;

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
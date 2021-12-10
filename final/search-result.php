
    <?php

    while ($row = mysqli_fetch_assoc($use_result)) {
              echo '<div class="search-result">';
              echo '<div id="search-details">';
              echo '<a href="recipe.php?id=' . $row['id'] . '"><h1 id="search-title">' . $row['name'] . '</h1></a>';
              echo '<h2 id="search-description">Cook Time: ' . $row['cooking-time'] . ' Minutes. Serves ' . $row['serving-amount'] . '</h2>';
              echo '</div>';
              echo '</div>';
          }
        ?> 

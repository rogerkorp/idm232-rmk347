<div class="search-result">
    <img id="search-thumbnail" src="https://via.placeholder.com/150">
    <?php

    while ($row = mysqli_fetch_assoc($use_result)) {
              echo '<div id="search-details">';
              echo '<h1 id="search-title">' . $row['name'] . '</h1>';
              echo '<h2 id="search-description">Cook Time: ' . $row['cooking-time'] . ' Minutes. Serves ' . $row['serving-amount'] . '</h2>';
              echo '</div>';
          }
        ?>
</div>   

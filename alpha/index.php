<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Testing</title>
        <link rel="stylesheet" href="">
    </head>
    <body> 
        <main>

          <?php
          //task 2
          $someText ='The quick brown fox jumped.';
          echo strtoupper($someText);
          ?>

          <?php
          $taskThree ='the quick brown fox jumped.';
          str_replace('quick', 'lazy', $taskThree);
          str_replace('brown', 'black', $taskThree);
          str_replace('jumped', 'slept', $taskThree);
          echo $taskThree;
          ?>

          <?php
          $taskFour = (3+6*(5+4)/3-7);
          echo $taskFour;
          ?>

        </main>
        <script src=""></script>
    </body>
</html>
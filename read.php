<?php
  include_once 'includes/dbconnect.php';
  include_once 'includes/header.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $data = "12";
      //create a template
      $sql = "SELECT * FROM users WHERE userID=?;";
      //create prepared statement
      $stmt = mysqli_stmt_init($conn);
      // ready the prepared statement
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "database connection error";
      } else {
        //bind paramaters to placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //run parameters inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['userID'] . "<br>";
        }
      }

    ?>

  </body>
</html>

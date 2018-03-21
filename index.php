<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Balance</th>
                      <th>Mobile Number</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'includes/dbconnect.php';
                   // $pdo = Database::connect();
                   $sql = 'SELECT * FROM users ORDER BY id DESC';
                   $sql = "SELECT * FROM users";
                   $result = mysqli_query($conn,$sql);
                   foreach ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>'. $row['firstName'] . '</td>';
                            echo '<td>'. $row['balance'] . '</td>';
                            echo '<td>'. $row['phone'] . '</td>';
                            echo '</tr>';
                   }
                   // Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>

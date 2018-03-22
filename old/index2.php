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
              <p>
                  <a href="create.php" class="btn btn-success">Create</a>
              </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Balance</th>
                      <th>Mobile Number</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                     include 'includes/dbconnect.php';
                     $sql = 'SELECT * FROM users ORDER BY userID DESC';
                     $result = mysqli_query($conn, $sql);

                     while ($row = mysqli_fetch_assoc($result)) {
                              echo '<tr>';
                              echo '<td>'. $row['firstName'] . '</td>';
                              echo '<td>'. $row['balance'] . '</td>';
                              echo '<td>'. $row['phone'] . '</td>';
                              echo '<td><a class="btn" href="read.php?id='.$row['userID'].'">Read</a></td>';
                              echo '</tr>';
                     }
                     mysqli_close($conn);
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>

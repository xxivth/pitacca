<!-- firstname
lastname
phone
email
password
submit -->

<?php
  include_once 'dbconnect.php';

  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql = "INSERT INTO users (firstName, lastName, phone, email, password)
          VALUES (?, ?, ?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Server connection error";
  } else {
    mysqli_stmt_bind_param ($stmt, "sssss", $firstname, $lastname, $phone, $email, $password);
    mysqli_stmt_execute($stmt);
  }

  header("Location: ../account.php?signup=success");

<?php

session_start();

if (isset($_POST['submit'])) {

  include_once 'dbconnect.php';

  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  //error handlers
  //check if inputs are empty
  if (empty($phone) || empty($password)) {
      header("Location: ../index.php?login=empty");
      exit();
  } else {
    $sql = "SELECT * FROM users WHERE phone = '$phone'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../index.php?login=incorrectphone");
        exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
          //password de-hashing
          $hashedPwdCheck = password_verify($password, $row['password']);
          if ($hashedPwdCheck == false) {
            header("Location: ../index.php?login=incorrectpassword");
            exit();
          } elseif ($hashedPwdCheck == true) {
            //login user
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['email'] = $row['email'];
            header("Location: ../index.php?login=success");
            exit();
          }
      }
    }
  }
} else {
  header("Location: ../index.php?login=error");
  exit();
}


    // $sql = "INSERT INTO users (firstName, lastName, phone, email, password)
    //         VALUES (?, ?, ?, ?, ?)";
    // $stmt = mysqli_stmt_init($conn);
    // if (!mysqli_stmt_prepare($stmt, $sql)) {
    //   echo "Server connection error";
    // } else {
    //   mysqli_stmt_bind_param ($stmt, "sssss", $firstname, $lastname, $phone, $email, $password);
    //   mysqli_stmt_execute($stmt);
    // }
    //
    // header("Location: ../account.php?signup=success");

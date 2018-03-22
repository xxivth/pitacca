<?php

  if (isset($_POST['submit'])) {

    include_once 'dbconnect.php';

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    //check if inputs are empty
    if (empty($firstname) || empty($lastname) || empty($phone) || empty($email) || empty($password) || empty($cpassword)) {
      header("Location: ../index.php?signup=empty");
      exit();

    } else {
      //check if input characters are valid
      if (!preg_match("/^[a-zA-Z'-]*$/", $firstname) || !preg_match("/^[a-zA-Z'-]*$/", $lastname)) {
        header("Location: ../index.php?signup=invalidchar");
        exit();

      } else {
        //check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../index.php?signup=invalidemail");
          exit();

        } else {
          $sql = "SELECT * FROM users WHERE phone='$phone'";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0) {
            header("Location: ../index.php?signup=phonetaken");
            exit();

          } else {
            if ($password != $cpassword) {
              header("Location: ../index.php?signup=passwordmismatch");
              exit();

            } else {
              //hash password
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
              //insert user into database
              //prepared statement template
              $sql = "INSERT INTO users (firstName, lastName, phone, email, password)
                      VALUES (?, ?, ?, ?, ?);";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../index.php?signup=dberror");
                exit();

              } else {
                // ready prepared statement
                mysqli_stmt_bind_param ($stmt, "ssiss", $firstname, $lastname, $phone, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
              }
            }
            header("Location: ../account.php?signup=success");
            exit();
            }
          }
        }
      }
    }
    else {
    header("Location: ../index.php");
    exit();
  }

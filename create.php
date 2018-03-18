<?php
// Include config file
require_once 'includes/config.php';

// Define variables and initialize with empty values
$firstName = $phone = $balance = "";
$name_err = $phone_err = $balance_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["firstName"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var(trim($_POST["firstName"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $name_err = 'Please enter a valid name.';
    } else{
        $firstName = $input_name;
    }

    // Validate address
    $input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = 'Please enter a phone number.';
    } else{
        $phone = $input_phone;
    }

    // Validate salary
    $input_balance = trim($_POST["balance"]);
    if(empty($input_balance)){
        $balance_err = "Please enter the balance amount.";
    } elseif(!ctype_digit($input_balance)){
        $balance_err = 'Please enter a positive integer value.';
    } else{
        $balance = $input_balance;
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($phone_err) && empty($balance_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO users (firstName, phone, balance) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_phone, $param_balance);

            // Set parameters
            $param_name = $firstName;
            $param_phone = $phone;
            $param_balance = $balance;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="firstName" class="form-control" value="<?php echo $firstName; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label>Phone</label>
                            <input name="phone" class="form-control" value="<?php echo $phone; ?>">
                            <span class="help-block"><?php echo $phone_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($balance_err)) ? 'has-error' : ''; ?>">
                            <label>Balance</label>
                            <input type="text" name="balance" class="form-control" value="<?php echo $balance; ?>">
                            <span class="help-block"><?php echo $balance_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

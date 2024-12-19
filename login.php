<?php 
session_start();

include("config.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get the posted data
    $user_name = trim($_POST['user_name']);
    $password = trim($_POST['password']);

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // Prepare and execute the query using placeholders
        $query = "SELECT * FROM users WHERE user_name = ? LIMIT 1";
        $stmt = $con->prepare($query);
        
        if ($stmt) {
            $stmt->bind_param("s", $user_name); // Bind the parameter
            $stmt->execute(); // Execute the query
            $result = $stmt->get_result(); // Get the result

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();

                // Use password_verify to compare the hashed password
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['user_name'] = $user_name;

                    // Use a proper role check instead of user_id
                    if ($user['Role'] == "Admin") {
                        header("Location: admin.php");
                    } else if ($user['Role'] == "User") {
                        header("Location: products.php");
                    }
                    exit(); // Stop further script execution
                } else {
                    $message[] = 'Invalid password.';
                }
            } else {
                $message[] = 'Wrong username or password.';
            }
        } else {
            $message[] = 'Database error: Failed to prepare the statement.';
        }
    } else {
        $message[] = 'Please enter valid information.';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        body{
            background-image: url('images_a/background.png');
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
    </style>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
   
   if(isset($message)){
      foreach($message as $message){
         echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
      };
   };
   
?>

<div class="login_container">
    <section>
        <form action="" method="post" class="login-form" enctype="multipart/form-data">
            <h3>login</h3>
            <input id="text" type="text" name="user_name" placeholder="Username" class="box" required>
            <input id="text" type="password" name="password" placeholder="Password" class="box" required>
            <input id="button" type="submit" value="Login" class="btn">
            <!-- <a href="signup.php">Click to Signup</a><br><br> -->
        </form>
    </section>
</div>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
<?php
if(isset($_POST['signupbtn'])){
    // Establishing connection to the database
    $servername = "localhost"; // Change this to your database server name
    $username = "root"; // Change this to your database username
    $password = "Pratik"; // Change this to your database password
    $database = "resume_user_db"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieving user input
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $confirm_password = mysqli_real_escape_string($conn, $confirm_password);

    // Validate input
    $errors = [];
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    } elseif ($password !== $confirm_password) {
        $errors[] = "Password and Confirm Password do not match.";
    }

    // If there are no errors, proceed with signup
    if (empty($errors)) {
        // Hash the password for security
        //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert user data into the database
        $sql = "INSERT INTO users VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Sign up successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }

    // Close database connection
    $conn->close();
}else{
    echo "Problem in loading";
}
?>

<?php
if(isset($_POST['loginbtn'])){
    $servername = "localhost";
    $username = "root"; 
    $password = "Pratik"; 
    $database = "resume_user_db"; 

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $user = mysqli_real_escape_string($conn, $user);
    $pass = mysqli_real_escape_string($conn, $pass);

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }

    $conn->close();
}else{
    echo "Problem in loading!!";
}


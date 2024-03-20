<?php
if(isset($_POST['loginbtn'])){
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "resume_user_db"; 

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $pass = $_POST['password']; 

    $email = mysqli_real_escape_string($conn, $email);
    $pass = mysqli_real_escape_string($conn, $pass);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: ../../index.html");
    } else {
        echo "Invalid username or password!";
    }

    $conn->close();
}else{
    echo "Problem in loading!!";
}


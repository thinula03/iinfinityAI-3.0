<?php
    $conn = mysqli_connect("localhost", "root", "root", "iinfinityai");

    if(!$conn){
        echo "Connection error: " . mysqli_connect_error();
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }


    $sql = "INSERT INTO emails (email) VALUES ('$email')";

    mysqli_query($conn, $sql);
?>
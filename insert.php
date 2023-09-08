<?php
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO `comments` (`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Your question has been posted successfully.";
    }
?>
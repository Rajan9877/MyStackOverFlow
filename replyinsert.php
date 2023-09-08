<?php
    include('config.php');
    $replyName = $_POST['replyName'];
    $replyEmail = $_POST['replyEmail'];
    $replyText = $_POST['replyText'];
    $commentId = $_POST['commentId'];
    $commentIdInt = intval($commentId);
    $sql = "INSERT INTO `replies` (`name`, `email`, `reply`, `comment_id`) VALUES ('$replyName', '$replyEmail', '$replyText', '$commentIdInt')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Reply Posted Successfully.";
    }
?>
<?php
    include('config.php');
    $commentId = $_POST['commentId'];
    $commentIdInt = intval($commentId);
    $sql = "SELECT * FROM replies WHERE comment_id = $commentIdInt ORDER BY reply_id DESC";
    $result = mysqli_query($conn, $sql);
    $array = [];

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        echo json_encode($array);
    }
?>

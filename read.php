<?php
    include('config.php');
    $sql = "SELECT * FROM comments ORDER BY comment_id DESC";
    $result = mysqli_query($conn, $sql);
    $array = [];

    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        echo json_encode($array);
    }
?>

<?php
include 'conexiune.php';


if (!empty($_GET['id'])) {
    $room_id = $_GET['id'];

    $deleteQuery = "DELETE FROM rooms WHERE id = $room_id";
    $deleteResult = mysqli_query($conexiune, $deleteQuery);


    if (!$deleteResult) {
        die("Error: " . mysqli_error($conexiune));
    }


    header("Location: /svetlana/pages/admin/index-1.php");
    exit();
}


mysqli_close($conexiune);
?>

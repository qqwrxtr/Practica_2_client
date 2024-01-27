<?php
include 'conexiune.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_room'])) {

    $price = $_POST['new_room_price'];
    $img = '/svetlana/images/' . $_POST['new_room_img'];
    $content = $_POST['new_room_content'];
    $title = $_POST['new_room_title'];
    $rating = $_POST['new_room_rating'];

    $insertQuery = "INSERT INTO rooms (price, img, content, title, rating) VALUES ('$price', '$img', '$content', '$title', '$rating')";
    $insertResult = mysqli_query($conexiune, $insertQuery);


    if (!$insertResult) {
        die("Error: " . mysqli_error($conexiune));
    }


    header("Location: /svetlana/pages/admin/index-1.php");
    exit();
}


mysqli_close($conexiune);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Room</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Create Room</h2>
    <form action="" method="POST">
        <!-- Add your form fields here -->
        <div class="form-group">
            <label for="new_room_price">Price:</label>
            <input type="text" class="form-control" name="new_room_price" required>
        </div>
        <div class="form-group">
            <label for="new_room_img">Image:</label>
            <input type="text" class="form-control" name="new_room_img" required>
        </div>
        <div class="form-group">
            <label for="new_room_content">Content:</label>
            <textarea class="form-control" name="new_room_content" required></textarea>
        </div>
        <div class="form-group">
            <label for="new_room_title">Title:</label>
            <input type="text" class="form-control" name="new_room_title" required>
        </div>
        <div class="form-group">
            <label for="new_room_rating">Rating:</label>
            <input type="text" class="form-control" name="new_room_rating" required>
        </div>
        <button type="submit" name="create_room" class="btn btn-primary">Create Room</button>
    </form>

    <a href="/svetlana/pages/admin/index-1.php" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>

<!-- Include necessary scripts (Bootstrap, jQuery, etc.) here -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

<?php
include 'conexiune.php';

if (!empty($_GET['id'])) {
    $room_id = $_GET['id'];

    $query = "SELECT * FROM rooms WHERE id = $room_id";
    $result = mysqli_query($conexiune, $query);

    if (!$result) {
        die("Error: " . mysqli_error($conexiune));
    }

    $room = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_room'])) {
   
    $updated_price = $_POST['update_room_price'];
    $updated_img = $_POST['update_room_img'];
    $updated_content = $_POST['update_room_content'];
    $updated_title = $_POST['update_room_title'];
    $updated_rating = $_POST['update_room_rating'];

    $updateQuery = "UPDATE rooms SET 
                    price = '$updated_price', 
                    img = '$updated_img', 
                    content = '$updated_content', 
                    title = '$updated_title', 
                    rating = '$updated_rating' 
                    WHERE id = $room_id";
    
    $updateResult = mysqli_query($conexiune, $updateQuery);


    if (!$updateResult) {
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
    <title>Update Room</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Update Room</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="update_room_price">Price:</label>
            <input type="text" class="form-control" name="update_room_price" value="<?= $room['price'] ?>" required>
        </div>
        <div class="form-group">
            <label for="update_room_img">Image:</label>
            <input type="text" class="form-control" name="update_room_img" value="<?= $room['img'] ?>" required>
        </div>
        <div class="form-group">
            <label for="update_room_content">Content:</label>
            <textarea class="form-control" name="update_room_content" required><?= $room['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="update_room_title">Title:</label>
            <input type="text" class="form-control" name="update_room_title" value="<?= $room['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="update_room_rating">Rating:</label>
            <input type="text" class="form-control" name="update_room_rating" value="<?= $room['rating'] ?>" required>
        </div>
        <button type="submit" name="update_room" class="btn btn-primary">Update Room</button>
    </form>

    <a href="/svetlana/pages/admin/index-1.php" class="btn btn-secondary mt-3">Back to Dashboard</a>
</div>

<!-- Include necessary scripts (Bootstrap, jQuery, etc.) here -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

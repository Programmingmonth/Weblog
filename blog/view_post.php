<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT title, content, created_at FROM posts WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        die("Post not found");
    }
} else {
    die("Invalid post ID");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['title']; ?> - My Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1><?php echo $row['title']; ?></h1>
    <p><?php echo $row['content']; ?></p>
    <small>Posted on <?php echo $row['created_at']; ?></small>
    <br><br>
    <a href="index.php">Back to Home</a>
</body>
</html>

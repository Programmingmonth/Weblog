<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create New Post - My Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Create New Post</h1>
    <form method="post" action="create_post.php">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>
        <label for="content">Content:</label><br>
        <textarea id="content" name="content" rows="10" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
    <br>
    <a href="index.php">Back to Home</a>
</body>
</html>

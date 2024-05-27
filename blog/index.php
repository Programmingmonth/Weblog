<?php
include "config.php";

$sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
$result = $conn0->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>My Blog</h1>
    <a href="create_post.php">Create New Post</a>
    <hr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='post'>";
            echo "<h2><a href='view_post.php?id=".$row['id']."'>".$row['title']."</a></h2>";
            echo "<p>".substr($row['content'], 0, 200)."...</p>";
            echo "<small>Posted on ".$row['created_at']."</small>";
            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "No posts found";
    }
    ?>
</body>
</html>
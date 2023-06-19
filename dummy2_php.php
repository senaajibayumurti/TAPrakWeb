<?php
include 'connection.php';

$dataId = $_GET['data-id'];

$query = mysqli_query($conn, "SELECT * FROM post_table WHERE id_post = $dataId");
$row = mysqli_fetch_assoc($query);

echo "Data ID: ".$dataId."<br>";
echo "Title: ".$row['title_post']."<br>";
echo "Content: ".$row['content_post']."<br>";

?>

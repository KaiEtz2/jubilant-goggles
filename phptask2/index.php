<?php
$link = mysqli_connect('localhost', 'root', '', 'stacksbowers');

if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

echo 'Connection successfully <br>';

//sql query
$sql = 'SELECT * FROM `wp_posts` WHERE post_title LIKE "_%" AND post_type = "nav_menu_item" ';


$result = mysqli_query($link, $sql);

//fetch results
$head = mysqli_fetch_all($result, MYSQLI_ASSOC);

//memory
mysqli_free_result($result);
mysqli_close($link);
foreach ($head as $head) {
    // Access individual columns using $row['column_name']
    echo "ID: " . $head['post_title'] . "<br>";
}
?>
<!DOCTYPE html>
<html> 

</html>


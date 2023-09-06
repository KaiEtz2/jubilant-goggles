<?php
$file = 'readme.txt';

if(file_exists($file)){
    echo readfile($file) . '<br>';
    echo realpath($file) . '<br>';
    echo filesize($file) . '<br>';
}else{
    echo 'File does not exist<br>';
}

?>

<!DOCTYPE html>
<html> 
    <?php include('templates/header.php') ?>
</body>
</html>
<?php
if(!empty($_GET['submit'])){
    echo "Given Array is not empty <br>";
    echo htmlspecialchars($_GET['name']);
    echo htmlspecialchars(' '.$_GET['team']);
}
if(empty($_GET['submit']))
   echo "Given Array is empty";
?>

<!DOCTYPE html>
<html> 
    <?php include('templates/header.php') ?>
    <section class="container">
        <h4 class="center">Add a Player</h4>
        <form class="white" action="add.php" method="GET">
            <label> Name</label>
            <input type="text" name="name">
            <label> Team</label>
            <input type="text" name="team">
            <div class="center"> <input type="submit" name="submit" value="submit" class="btn z-depth-0"></div>
        </form>
       
    </section>
</body>
</html>

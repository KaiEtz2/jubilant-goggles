<?php
//connection
$link = mysqli_connect('localhost', 'kai', '1234', 'nfl');

if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

echo 'Connection successfully <br>';

//sql query
$sql = 'SELECT Name, Team, Games_Played FROM mytable ORDER BY Games_Played';

$result = mysqli_query($link, $sql);

//fetch results
$games = mysqli_fetch_all($result, MYSQLI_ASSOC);

//memory
mysqli_free_result($result);
mysqli_close($link);

//print_r($games);
?>

<!DOCTYPE html>
<html> 
    <?php include('templates/header.php') ?>
    <h4 class = "center grey-text">NFL Stats</h4>

    <div class="container">
        <div class="row">

        <?php foreach($games as $stat){ ?>
            <div class="col s6 md3">
                    <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($stat['Name']);?></h6>
                        <div><?php echo 'Team: ' . htmlspecialchars($stat['Team']);?></div>
                        <div><?php echo 'Games Played: ' . htmlspecialchars($stat['Games_Played']);?></div>
                        
                    </div>
                    </div>
                </div>
        <?php }?>
        
        </div>
    </div>
    
</body>
</html>



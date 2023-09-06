<?php

$a = array(1, 2, 3, 17);
//foreach example
foreach ($a as $v) {
    echo "Current value of \$a: $v.<br>";
}
//for example
echo '<br>';
for($i = 0; $i < count($a); $i++){
    echo $a[$i] . ' ';
}

//connection
$link = mysqli_connect('localhost', 'kai', '1234', 'nfl');

if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

echo 'Connected successfully <br> <br>';

//sql query
$sql = 'SELECT Name, Player_Id, Games_Played FROM mytable ORDER BY Games_Played';

$result = mysqli_query($link, $sql);

//fetch results
$games = mysqli_fetch_all($result, MYSQLI_ASSOC);

//memory
mysqli_free_result($result);
mysqli_close($link);

foreach ($games as $stat) {
    echo "Current value of Games: PlayerID:";
    echo htmlspecialchars($stat['Player_Id']);
    echo ",       Games Played ";
    echo htmlspecialchars($stat['Games_Played']);
    echo ",       Player Name ";
    echo htmlspecialchars($stat['Name']);
    echo "<br>";
}
echo "<br><br>";
//functions 
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }

?>

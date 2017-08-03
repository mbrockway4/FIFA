<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <title>FIFA 2017</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
        <img src="img/EA.jpg" class="logo" />
        <H1>FIFA 2017</H1>
        <div>
            <button class="btn-bot" style="color:black" onclick="window.location.href='/index.php'">BACK</button>
        </div>
        <BR>
</body>
        <?php
$servername = "localhost";
$username = "id2446647_brocknutz";
$password = "shaft2k2";
$dbname = "id2446647_fifa";
$con = mysqli_connect($servername,$username,$password, $dbname);
#mysqli_select_db($con,'results');

$result = mysqli_query($con,"SELECT * FROM results ORDER BY id DESC");

if (!$con) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
echo "<table style='font-size:10px' class='db-table'>";

echo "<tr><td>ID</td><td>Player 1</td><td>Player 2</td><td>HS</td><td>Player 3</td> <td>Player 4</td><td>AS</td><td>Date</td></tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['Player1'] . "</td>";
echo "<td>" . $row['Player2'] . "</td>";
echo "<td>" . $row['HomeScore'] . "</td>";
echo "<td>" . $row['Player3'] . "</td>";
echo "<td>" . $row['Player4'] . "</td>";
echo "<td>" . $row['AwayScore'] . "</td>";
echo "<td>" . $row['timestamp'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>


</html>
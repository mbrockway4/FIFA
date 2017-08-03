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

    <div class="row-fluid">
        <img src="img/EA.jpg" class="logo" />

        <H1>FIFA 2017</H1>

        <div style="text-align: center;">
            <button onclick="window.location.href='/AddGame.html'">ADD GAME</button>
            <button onclick="window.location.href='/Results.php'">RESULTS</button>
        </div>




        <?php
$servername = "localhost";
$username = "id2446647_brocknutz";
$password = "shaft2k2";
$dbname = "id2446647_fifa";
$link = mysqli_connect("localhost", $username, $password, $dbname);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$players = array("Brockway", "Dawson", "Drew", "Pierce", "Schmity", "Vancamp", "Witt");

echo "<br>";
#echo "Player|GP|W|L|Avg|GF|GA|GD|GDA";

$str = "";

echo "<br>";

foreach($players as $value)
{
    #echo $str;
    
$query =  "SHOW TABLES FROM id2446647_fifa like '$value';";
$query .=  "SELECT count(id) FROM $value;";
$query .= "SELECT count('Outcome') FROM $value where outcome = 'W';";
$query .= "SELECT count('Outcome') FROM $value where outcome = 'L';";
$query .= "SELECT avg(Outcome = 'W') as 'WIN%' FROM $value;";
$query .=  "SELECT sum(score) FROM $value;";
$query .=  "SELECT sum(OppScore) FROM $value;";
$query .= "SELECT SUM(GD) as 'GD' FROM $value;";
$query .= "SELECT avg(GD) as 'GDA' FROM $value;";

/* execute multi query */

if (mysqli_multi_query($link, $query)) {
    do {

        /* store first result set */
        if ($result = mysqli_store_result($link)) {
            while ($row = mysqli_fetch_row($result)) {
                #printf("%s", $row[0]);
                #echo $row[0]; 
                $str = $str . $row[0];

            }
        }
        /* print divider */
        if (mysqli_more_results($link)) {
            $str = $str . ",";
        }

    } while (mysqli_more_results($link) && mysqli_next_result($link) );
    
}
#echo $str;

#$results = explode(',',$str,9);



#$P1 = $results[0];
#$GP = (int)$results[1];
#$W = (int)$results[2];
#$L = (int)$results[3];
#$AVG = (float)$results[4];
#$GF = (int)$results[5];
#$GA = (int)$results[6];
#$GD = (int)$results[7]; 
#$GDA = (float)$results[8];


#$sql2 = "UPDATE stats SET GP = '$GP', W = '$W', L = '$L', AVG = '$AVG', GF = '$GF', GA = '$GA', GD = '$GD', GDA = '$GDA' WHERE player = '$P1';";

#if ($link->query($sql2) === TRUE) {
    
#} else {
 #   echo "Error: " . $sql2 . "<br>" . $link->error;
#}

#$str = "";
}

$con = mysqli_connect($servername,$username,$password,$dbname);

$result = mysqli_query($con,"SELECT * FROM stats ORDER BY AVG DESC, GDA DESC");

echo "<table class='db-table'>";

echo "<tr><td>Player</td><td>GP</td><td>W</td><td>L</td><td>AVG</td><td>GF</td><td>GA</td><td>GD</td><td>GDA</td></tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr class='text-capitalize'>";
echo "<td onclick=D('".$row['player']."')><a style='color:white;font-weight: bold;font-size:15px' href=#>". $row['player']."</a></td>";
echo "<td>" . $row['GP'] . "</td>";
echo "<td>" . $row['W'] . "</td>";
echo "<td>" . $row['L'] . "</td>";
echo "<td>" . $row['AVG'] . "</td>";
echo "<td>" . $row['GF'] . "</td>";
echo "<td>" . $row['GA'] . "</td>";
echo "<td>" . $row['GD'] . "</td>";
echo "<td>" . $row['GDA'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($link);
?>


    </div>
</body>

</html>

<script type="text/javascript">
    function D(x) {
       if (window.XMLHttpRequest) {
               // code for IE7+, Firefox, Chrome, Opera, Safari
               xmlhttp = new XMLHttpRequest();
           } else {
               // code for IE6, IE5
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
           }

           str = x
                    //xmlhttp.open("GET","players.php?q="+str,true);
                    //xmlhttp.send();
                    window.location = "players.php?q="+str,true;
                  }
</script>


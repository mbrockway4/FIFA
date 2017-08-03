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

<?php
$q          = $_REQUEST["q"];

$servername = "localhost";
$username = "id2446647_brocknutz";
$password = "shaft2k2";
$dbname = "id2446647_fifa";

$con = mysqli_connect($servername,$username,$password, $dbname);
mysqli_select_db($con,'results');

$result = mysqli_query($con,"SELECT * FROM $q ");
echo"<H2 class='text-capitalize' style='font-weight:bold' >".$q."</H2>";

?>

<div class="panel-group" id="accordion">
    <div class="panel panel-default" id="panel1">
        <div class="panel-heading">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseOne" 
           href="#collapseOne" class="collapsed" >
          STATS
        </a>
      </h4>

 
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                Get Fucked
            </div>
        </div>
    </div>
    </div>
    <div class="panel panel-default" id="panel2">
        <div class="panel-heading">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseTwo" 
           href="#collapseTwo" class="collapsed">
          RESULTS
        </a>
      </h4>

        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
<div class="panel-body">
<?php
$q          = $_REQUEST["q"];

$servername = "localhost";
$username = "id2446647_brocknutz";
$password = "shaft2k2";
$dbname = "id2446647_fifa";

$con = mysqli_connect($servername,$username,$password, $dbname);
$result = mysqli_query($con,"SELECT * FROM $q ");
#mysqli_select_db($con,'results');

echo "<table style='font-size:10px; padding:2px' class='db-table'>";
echo "<tr><td>ID</td><td>Rslt</td><td>Partner</td><td>G</td><td>Loc</td><td>Opp1</td><td>Opp2</td><td>G</td><td>Time</td></tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['Outcome'] . "</td>";
echo "<td>" . $row['Partner'] . "</td>";
echo "<td>" . $row['Score'] . "</td>";
echo "<td>" . $row['Location'] . "</td>";
echo "<td>" . $row['Opp1'] . "</td>";
echo "<td>" . $row['Opp2'] . "</td>";
echo "<td>" . $row['OppScore'] . "</td>";
echo "<td>" . $row['timestamp'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>
        </div>
    </div>
<div class="panel panel-default" id="panel3">
 <div class="panel-heading">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseThree" 
           href="#collapsethree" class="collapsed" >
          ADVANCED STATS
        </a>
      </h4>

 
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <img class="pierce" src="img/smug.JPG" style="width: 70%;display: block;margin: auto;">
            </div>
        </div>
    </div>
</div>
</div>




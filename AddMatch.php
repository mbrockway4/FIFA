<?php
$q          = $_REQUEST["q"];
#secho $q;
$results    = explode(',', $q, 8);
$Player1    = $results[0];
$Player2    = $results[1];
$Player3    = $results[2];
$Player4    = $results[3];
$HS         = $results[4];
$AS         = $results[5];
$HR         = $results[6];
$AR         = $results[7];
$GDH        = $HS - $AS;
$GDA        = $AS - $HS;
$servername = "localhost";
$username = "id2446647_brocknutz";
$password = "shaft2k2";
$dbname = "id2446647_fifa";
$con        = mysqli_connect($servername, $username, $password, $dbname);
#$dateTimeVariable = date("F j, Y \a\t g:ia");
$sql        = "INSERT INTO `results` (`id`, `Player1`, `Player2`,`Player3`, `Player4`,
 `HomeScore`, `AwayScore`, `HomeResult`, `AwayResult`, `timestamp`) 
VALUES (NULL, '$Player1', '$Player2', '$Player3', '$Player4', '$HS', '$AS', '$HR','$AR', CURRENT_TIMESTAMP);";
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
$sql2 = "INSERT INTO $Player1 (`id`, `Outcome`, `Partner`,`Score`,`Location`, `Opp1`, `Opp2`, `OppScore`,`GD`, `timestamp`) 
VALUES (NULL, '$HR', '$Player2', '$HS', 'Home', '$Player3', '$Player4', '$AS','$GDH', CURRENT_TIMESTAMP);";
if ($con->query($sql2) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}
$sql2 = "INSERT INTO $Player2 (`id`, `Outcome`, `Partner`,`Score`,`Location`, `Opp1`, `Opp2`, `OppScore`,`GD`, `timestamp`) 
VALUES (NULL, '$HR', '$Player1', '$HS', 'Home', '$Player3', '$Player4', '$AS','$GDH', CURRENT_TIMESTAMP);";
if ($con->query($sql2) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}
$sql2 = "INSERT INTO $Player3 (`id`, `Outcome`, `Partner`,`Score`,`Location`, `Opp1`, `Opp2`, `OppScore`,`GD`, `timestamp`) 
VALUES (NULL, '$AR', '$Player4', '$AS', 'Away', '$Player1', '$Player2', '$HS','$GDA', CURRENT_TIMESTAMP);";
if ($con->query($sql2) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}
$sql2 = "INSERT INTO $Player4 (`id`, `Outcome`, `Partner`,`Score`,`Location`, `Opp1`, `Opp2`, `OppScore`,`GD`, `timestamp`) 
VALUES (NULL, '$AR', '$Player3', '$AS', 'Away', '$Player1', '$Player2', '$HS','$GDA', CURRENT_TIMESTAMP);";
if ($con->query($sql2) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql2 . "<br>" . $con->error;
}
#$result = mysqli_query($con,"SELECT * FROM results");
mysqli_close($con);
?>
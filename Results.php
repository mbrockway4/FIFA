<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>FIFA 2017</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <div id="content">
        <img src="img/EA.jpg" class="logo" />
        <H1>FIFA 2017</H1>
        <div style="text-align: center;">
            <button onclick="window.location.href='/index.php'">BACK</button>
        </div>

        <?php
$servername = "localhost";
$username = "root";
#$password = "password";
$dbname = "fifa";
$con=mysqli_connect($servername,$username,"",$dbname);
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $result = mysqli_query($con,"SELECT * FROM results");
    echo "<table>";
    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Player1'] . "</td></tr>"; 
      }
    mysqli_close($con);

?>

</body>
</html>
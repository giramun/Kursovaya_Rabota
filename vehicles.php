<?php
    $connect_string = "host=localhost port=5432 dbname=car user=postgres password=263651fd";
    $dbconnect = pg_connect($connect_string);
    $query = "select * from cars";
    $result = pg_query($dbconnect, $query);
    $result = pg_fetch_assoc($result);
    pg_close($dbconnect);
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Mars Dealership</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php require 'header.php' ?>
<div id="mainpage">
    <h1>Vehicles</h1>
</div>
<?php require 'footer.php' ?>
</body>
</html>

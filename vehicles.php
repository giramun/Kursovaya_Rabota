<?php
    $connect_string = "host=localhost port=5432 dbname=project user=admin password=admin";
    $dbconnect = pg_connect($connect_string);
    $query = "select * from car";
    $result = pg_query($dbconnect, $query);
    $rows = pg_num_rows($result);
    echo $rows;
    //$result = pg_fetch_assoc($result,0);
    print_r($result);

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
    <h1 style="text-align: center">Vehicles</h1>
    <div id="cars-table">
        <?php
            for ($i = 0; $i < $rows;$i++) {
                $r = pg_fetch_assoc($result,$i);
                echo '
<div class="car-cell">
    <div class="pictures">
        <img src="'.$r['picture'].'"/>
    </div>
    <div class="description">
        <div class="car-description">
            <div style="font-weight: bold">'.$r['year'].' '.$r['mark'].' '.$r['model'].' '.'</div>
            <div><strong>Miles:</strong> '.$r['miles'].'</div>
            <div><strong>Engine:</strong> '.$r['engine'].'</div>
            <div><strong>Transmission:</strong> '.$r['transmission'].'</div>
        </div>
        <div class="car-price">
            <div>$'.$r['price'].'</div>
            <button>Check availability</button>
        </div>
    </div>
</div>
                        ';
            }
        ?>
    </div>
</div>
<?php require 'footer.php' ?>
</body>
</html>

<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title>Vehicle Request</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<?php require 'header.php' ?>
<div id="mainpage">
 <h1 style="text-align: center">Car Request</h1>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name" required/>
        <label>E-mail</label>
        <input type="email" name="e-mail" required/>
        <label>Phone number</label>
        <input type="number" name="number" required/>
        <label>Tell us about requested vehicle</label>
        <textarea></textarea>
        <input type="submit" name="SUBMIT"/>
    </form>
</div>
<?php require 'footer.php' ?>
</body>
</html>
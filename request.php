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
    <form action="" method="post" id="request-form">
        <div class="form-label">
            <label>Name</label>
            <input type="text" name="name" required/>
        </div>
            <div class="form-label"l>E-mail</label>
            <input type="email" name="e-mail" required/>
        </div>
        <div class="form-label">
            <label>Phone number</label>
            <input type="number" name="number" required/>
        </div>
        <div class="center">
            <textarea required placeholder="Tell us about requested car"></textarea>
        </div>
        <div class="center button">
            <button type="submit">SUBMIT</button>
        </div>
    </form>
</div>
<?php require 'footer.php' ?>
</body>
</html>
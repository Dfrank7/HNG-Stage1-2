<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>HNGInternship 4.0</title>
</head>

<body>
    <div class="navBarStyle top-right">
                <a href="#">Sign Up</a>
                <a class="inbetween">|</a>
                <a href="#">About Us</a>
            </div>

    <main>
        <div>
            <h1>HNGInternship 4.0</h1>
        </div>

        <p>Cool to be part of this awesome program<br>Thanks to Hotels.ng</p>
        <div class="datetime">
            <?php
                date_default_timezone_set("Africa/Lagos");
                ?>
                <a><?= date("h:i:sa"); ?></a> | <a><?= date("d-m-Y");?></a>
        </div>


    </main>
    <!-- <footer><span>NOW LETS CODE</span></footer> -->

</body>

</html>
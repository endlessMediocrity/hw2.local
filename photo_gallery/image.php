<?php $images = [1 => 'images/Mona_Lisa.jpg', 2 => 'images/nature.jpg', 3 => 'images/threes.jpg'] ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <img src="<?= $images[$_GET['id']]?>" alt="image">

</body>
</html>
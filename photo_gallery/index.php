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

    <?php $images = [1 => 'images/Mona_Lisa.jpg', 2 => 'images/nature.jpg', 3 => 'images/threes.jpg'] ?>
    <form action="index.php" method="get">
        <a href="image.php?id=1"> <img src = "<?=$images[1]?>" alt=<?=$images[1]?>> </a>
        <br>`
        <a href="image.php?id=2"> <img src = "<?=$images[2]?>" alt=<?=$images[2]?>> </a>
        <br>
        <a href="image.php?id=3"> <img src = "<?=$images[3]?>" alt=<?=$images[3]?>> </a>
    </form>

</body>
</html>
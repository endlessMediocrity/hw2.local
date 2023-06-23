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

<form action="index.php" method="get">
    Введите 1 число: <input type="text" name="first_num" value="<?= $_GET['first_num'] ?>">
    <br>
    <br>
    Введите 2 число: <input type="text" name="second_num" value="<?= $_GET['second_num'] ?>">
    <br>
    <br>
    Выберете знак операции:
    <select name="sign">
        <option value="+">+(сумма)</option>
        <option value="-">-(разность)</option>
        <option value="*">*(умножение)</option>
        <option value=":">:(деление)</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Результат">

    <br>

    <?php if (isset($_GET)) {
        include "functions.php";

        assert(5 === calc(2, 3, "+"));
        assert(0 === calc(2, 2, "-"));
        assert(4 === calc(2, 2, "*"));
        assert(1 === calc(2, 2, ":"));
    }
    ?>

    <?php if ($_GET) {
        echo "<h1>" . "Результат выражения:" . "</h1>" . "<h2>" . $_GET['first_num'] . " " . $_GET['sign'] . " " . $_GET['second_num'] . " = " . calc($_GET['first_num'], $_GET['second_num'], $_GET['sign']) . "</h2>";
    }
    ?>
</form>

</body>
</html>
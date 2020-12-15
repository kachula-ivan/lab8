<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showTovarnakupivlyu.php")    
    ?>

<form action="deleteFromTovarnakupivlyu.php" method="post">
        <label>id delete ryadok</label><input name="id" type="text"><br>
        <input type="submit" value="Delete ryadok">
</form>

</body>
</html>
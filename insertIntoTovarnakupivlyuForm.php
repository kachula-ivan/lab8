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

    <form action="insertIntoTovarnakupivlyu.php" method="post">
        <label>id</label><input name="pib" type="text"><br>
        <label>name</labelt><input name="gr" type="text"><br>
        <label>price</label><input name="gr1" type="text"><br>
        <input type="submit" value="Vstavyty ryadok">
    </form>

</body>
</html>

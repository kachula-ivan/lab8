<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Vstavka danych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showKorzyna.php")    
    ?>

    <form action="InsertIntoKorzyna.php" method="post">
        <label>id</label><input name="pib22" type="text"><br>
        <label>tovar</label><input name="gr22" type="text"><br>
        <input type="submit" value="Vstavyty ryadok">
    </form>

</body>
</html>

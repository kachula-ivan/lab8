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
        include("showUser.php")    
    ?>

    <form action="insertIntoUser.php" method="post">
        <label>id</label><input name="idd" type="text"><br>
        <label>name</labelt><input name="nam" type="text"><br>
        <label>place</label><input name="pla" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>

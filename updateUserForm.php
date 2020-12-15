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

<form action="updateUser.php" method="post">
        <label>id</label><input name="id" type="text"><br>
        <label>new name</label><input name="pib" type="text"><br>
        <label>new place</label><input name="gr" type="text"><br>
        <input type="submit" value="Zmineno ryadok">
</form>

</body>
</html>
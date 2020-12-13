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
        include("showStudents.php")    
    ?>

    <form action="insertIntoStudents.php" method="post">
        <label>ПІБ</label><input name="pib" type="text"><br>
        <label>ІД групи</label><input name="gr" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>

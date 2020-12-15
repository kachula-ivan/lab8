l>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showAccount.php")    
    ?>

<form action="updateAccount.php" method="post">
        <label> tel</label><input name="id" type="text"><br>
        <label>new password</label><input name="pib" type="text"><br>
        <input type="submit" value="Zmineno ryadok">
</form>

</body>
</html>
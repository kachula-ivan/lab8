<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$pib22 = $_POST['pib22']; $gr22 = $_POST['gr22'];

$sql = "INSERT INTO korzyna (id, tovar) VALUES ('$pib22', '$gr22' )";


if($mysqli->query($sql)){
    echo "Ryadok vstavleno uspishno";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showKorzyna.php")
?>
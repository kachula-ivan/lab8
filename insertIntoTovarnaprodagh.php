<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$pib = $_POST['pib']; $gr = $_POST['gr']; $gr1 = $_POST['gr1'];

$sql = "INSERT INTO tovar_na_prodaj (id, opys, price) VALUES ('$pib', '$gr' , '$gr1')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showTovarnaprodagh.php")
?>

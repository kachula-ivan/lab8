<?php

$mysqli = new mysqli('localhost', 'root', '', 'mybd'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$idd = $_POST['idd']; $nam = $_POST['nam']; $pla = $_POST['pla'];

$sql = "INSERT INTO user (id, name, place) VALUES ('$idd', '$nam' , '$pla')";


if($mysqli->query($sql)){
    echo "Ryadok vstavleno uspishno";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();

include("showUser.php")
?>


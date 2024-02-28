
<?php
$hostname = 'localhost'; // Имя хоста базы данных
$username = 'root'; // Имя пользователя базы данных
$password = ''; // Пароль базы данных
$databaseName = 'webdbkst'; // Название базы данных

// Создание подключения к базе данных MySQL
$mysqli = new mysqli($hostname, $username, $password, $databaseName);

// Проверка соединения на ошибки
if ($mysqli->connect_error) {
    die('Ошибка подключения к базе данных: ' . $mysqli->connect_error);
}

// Получение введенного имени пользователя и пароля из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Подготовка SQL-запроса для проверки пароля
$query = "SELECT * FROM users WHERE login = '$username' AND password = '$password'";
$result = $mysqli->query($query);

// Проверка наличия результата и правильности пароля
if ($result->num_rows > 0) {
    header('Location: /index.php'); // Перенаправление на другую страницу в случае верного пароля
    exit();
} else {
    header('Location: /login.php?error=1'); // Перенаправление на страницу авторизации с сообщением об ошибке
    exit();
}

// Закрытие соединения с базой данных
$mysqli->close();
?>
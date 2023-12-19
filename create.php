<?php



require_once 'connect.php';

print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];
$photo = $_POST['photo'];
$supplier = $_POST['supplier'] ?? null;
$cost = $_POST['cost'] ?? null;
$category = $_POST['category'] ?? null;

// Проверка значений перед запросом на вставку
if (is_null($supplier) || is_null($cost) || is_null($category)) {
    // Отладочное сообщение, вы можете вывести какую-то ошибку пользователю
    echo "One or more fields are empty.";
    exit; // Прерываем выполнение скрипта, если поля не заполнены
  }
    

mysqli_query($connect,"INSERT INTO `Product` (`id`, `name`, `telephone`, `description`, `photo`, `cost`, `supplier`, `category`) VALUES (NULL, '$name', '$telephone', '$description', '$photo', '$cost', '$supplier', '$category')");


if ($result) {
    echo "Данные успешно добавлены в базу данных!";
} else {
    echo "Ошибка: " . mysqli_error($connect);
}
}
header('Location: /');
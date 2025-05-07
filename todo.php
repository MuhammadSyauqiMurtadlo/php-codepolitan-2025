<?php

$todos = [];
$file = file_get_contents('todo.txt');
$todos = unserialize($file);

if (isset($_POST['todo'])) {
  $data = $_POST['todo'];
  $todos[] = [
    'todo' => $data,
    'status' => 0
  ];
  file_put_contents('todo.txt', serialize($todos));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Todo App</h1>
  <form action="" method="POST">
    <label for="todo">Apa Kegiatanmu hari ini?</label> <br>
    <input type="text" name="todo" required>
    <button type="submit">Add</button>
  </form>
  <ul>
    <li>
      <input type="checkbox" name="todo" id="todo">
      <label for="todo">Belajar Bahasa Pemrograman PHP</label>
      <button type="submit">Delete</button>
    </li>
    <li>
      <input type="checkbox" name="todo" id="todo">
      <label for="todo">Belajar Framework Laravel</label>
      <button type="submit">Delete</button>
    </li>
    <li>
      <input type="checkbox" name="todo" id="todo">
      <label for="todo">Belajar Database MySQL</label>
      <button type="submit">Delete</button>
    </li>
    <li>
      <input type="checkbox" name="todo" id="todo">
      <label for="todo">Belajar Docker</label>
      <button type="submit">Delete</button>
    </li>
  </ul>
</body>

</html>
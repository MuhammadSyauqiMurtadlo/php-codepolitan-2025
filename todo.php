<?php

// total array yang disiapkan untuk disimpan
$todos = [];
// jika file todo.txt ada, ambil isinya
if (file_exists('todo.txt')) {
  // ambil isi file todo.txt dan simpan ke dalam variabel $file
  $file = file_get_contents('todo.txt');
  // ubah isi file yang berbentuk string menjadi array
  $todos = unserialize($file);
}

// jika ada data yang dikirimkan melalui method POST
if (isset($_POST['todo'])) {
  $data = $_POST['todo']; // ambil data dari form
  $todos[] = [
    'todo' => $data,
    'status' => 0
  ];
  saveTodo($todos);
}

if (isset($_GET['status'])) {
  $todos[$_GET['key']]['status'] = $_GET['status'];
  saveTodo($todos);
}

if (isset($_GET['hapus'])) {
  unset($todos[$_GET['key']]);
  saveTodo($todos);
}

function saveTodo($todos)
{
  file_put_contents('todo.txt', serialize($todos));
  header('Location: todo.php');
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
    <?php foreach ($todos as $key => $value) : ?>
      <li>
        <input type="checkbox" name="todo" id="todo" onclick="window.location.href='todo.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?= $key ?>'"
          <?php if ($value['status'] == 1) echo 'checked' ?>>
        <label for="todo">
          <?php if ($value['status'] == 1) : ?>
            <strike><?= $value['todo'] ?></strike>
          <?php else : ?>
            <?= $value['todo'] ?>
          <?php endif; ?>
        </label>
        <a type="submit" href="todo.php?hapus=1&key=<?= $key ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>
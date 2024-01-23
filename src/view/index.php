<?php
session_start();
if (!isset($_SESSION['global_data'])) {
    $_SESSION['global_data'] = [
        'Arrumar casinha',
        'Limpar quartinho',
        'lavar loucinha'
    ];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['text-todo']) && !empty($_POST['text-todo'])) {
        $_SESSION['global_data'][] = $_POST['text-todo'];
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Todo</title>
</head>
<body>
        <div class="container-todo">
            <ul  class="nav">
                <li><a href="">Day</a></li>
                <li><a href="">Week</a></li>
                <li><a href="">Month</a></li>
                <li><a href="">Year</a></li>
            </ul>
            <div class="time">
                <h1>
                    <?= date('l'); ?>
                </h1>
                <p>
                    <?= date("M d, Y"); ?>
                </p>
            </div>
            <div class="input-text">
                <form action="" method="post">
                    <input placeholder="add task..." type="text" name="text-todo" id="text-todo">
                    <button id="button-submit" type="submit">+</button>
                </form>
            </div>
            <div class="containerP-task">
                <?php
                    $a = $_SESSION['global_data'];

                    foreach ($a as $b) {
                ?>
                        <div class="container-task">
                            <input type="checkbox" name="x" id="1x" class="tasks">
                            <label for="x"><?= $b ?></label>
                        </div>
                <?php } ?>
            </div>
        </div>

</body>
</html>
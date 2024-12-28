<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> 
    <title>main page</title>
</head>
<body>
<header>
  <nav>
   <?php if($_SESSION['user_auth'] == false) : ?>
    <a href="auth/signin.php" class="btn btn-primary">Вход</a>
    <a href="auth/signup.php" class="btn btn-primary">Регистрация</a>
    <?php else: ?>
    <a href="auth/logout.php" class="btn btn-primary">Выход</a>
    <?php endif; ?>
  </nav>
</header>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Логин: <?= $_SESSION['user_login']; ?></p>
        <p>ID: <?= $_SESSION['user_id']; ?></p>
        <p><?= $_SESSION['user_auth'] == true ? 'Авторизован' : 'Не авторизован'; ?></p>
      </div>
    </div>
  </div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>
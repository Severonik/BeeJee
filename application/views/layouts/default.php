<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/form.js"></script>
	<script src="/public/scripts/bootstrap.js"></script>
	<script src="/public/scripts/popper.js"></script>
	<link rel="stylesheet" href="/public/styles/bootstrap.css">
	<link rel="stylesheet" href="/public/styles/admin.css">
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/login">Вход</a>
      </li>
    </ul>
    <span class="navbar-text">
      Тестовое задание для BeeJee
    </span>
  </div>
</nav>
</header>
	<?php echo $content; ?>

	<footer id="footer" class="footer navbar-fixed-bottom">
        <div class="container">
            <div class="text-center">
                <small>&copy; 2019, Тестовое задание для BeeJee</small>
            </div>
         </div>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="/public/styles/bootstrap.css">
        <link rel="stylesheet" href="/public/styles/admin.css">
        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="/public/scripts/bootstrap.js"></script>
    </head>
    <body >
        <?php if ($this->route['action'] != 'login' and $title != 'Добавить задачу'): ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
 	 <div class="collapse navbar-collapse" id="navbarText">
    	<ul class="navbar-nav mr-auto">
            <li class="nav-item">
         <a class="nav-link" href="/">Главная</a>
         </li>
     	<li class="nav-item">
       	 <a class="nav-link" href="/admin/objective">Задачи</a>
     	 </li>
     	 <li class="nav-item">
     	   <a class="nav-link" href="/admin/logout">Выход</a>
     	 </li>
   	 </ul>
   	 <span class="navbar-text">
    	  Панель администратора
   	 </span>
  	</div>
	</nav>
        <?php endif; ?>
        <?php echo $content; ?>
        <?php if ($this->route['action'] != 'login'): ?>
            <footer id="footer" class="footer navbar-fixed-bottom">
                <div class="container">
                    <div class="text-center">
                        <small>&copy; 2019, Тестовое задание для BeeJee</small>
                    </div>
                </div>
            </footer>
        <?php endif; ?>
    </body>
</html>
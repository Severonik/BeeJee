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
<br />
<div class="container">
<form action="/task" method="post">
 <div class="form-group">
    <input name="name" type="text"  class="form-control" placeholder="Имя"/>
 </div>
 <div class="form-group">  
    <input name="email" type="email" class="form-control" placeholder="E-mail"/> 
 </div>
 <div class="form-group">
   <textarea name="text" class="form-control" placeholder="Текст задачи"></textarea>
 </div>
 <div class="form-group">
 	<button type="submit"   class="btn btn-info">Отправить</button>
 </div>
</form>
</div>
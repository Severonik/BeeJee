<div class="header-h1">
  <h1>Задачи</h1>
</div>
<?php
$URIParts = explode('?',$_SERVER['REQUEST_URI']);

if(isset($URIParts[1])) {
    $GETS = $URIParts[1];
    $GETS = explode('&',$GETS);
    $params = array();
    foreach($GETS as $GET) {
        $vars = explode('=', $GET);
        $params[$vars[0]] = $vars[1];
    }

}
?>
<div class="container">
<table class="table table-striped">
  <? 
  if($_SERVER['REQUEST_URI'] == "/") {
    $addUrl = "main/index/".$vars["list"][0]["id"]; 
  }else {
    $addUrl = "";
  } 
  ?>
  <thead>
    <tr>
      <th scope="col"><a href="<? echo $addUrl?>?sort=id&type=<?php echo (isset($params['sort']) && $params['sort'] == 'id' && isset($params['type']) && $params['type'] == 'asc') ? 'desc' : 'asc' ?>">№</a></th>
      <th scope="col"><a href="<? echo $addUrl?>?sort=name&type=<?php echo (isset($params['sort']) && $params['sort'] == 'name' && isset($params['type']) && $params['type'] == 'asc') ? 'desc' : 'asc' ?>">Имя</a></th>
      <th scope="col"><a href="<? echo $addUrl?>?sort=email&type=<?php echo (isset($params['sort']) && $params['sort'] == 'email' && isset($params['type']) && $params['type'] == 'asc') ? 'desc' : 'asc' ?>">E-mail</a></th>
      <th scope="col">Описание</th>
      <th scope="col"><a href="<? echo $addUrl?>?sort=action&type=<?php echo (isset($params['sort']) && $params['sort'] == 'action' && isset($params['type']) && $params['type'] == 'asc') ? 'desc' : 'asc' ?>">Статус</a></th>
    </tr>
  </thead>
  <tbody>
<?php if (empty($list)): ?>
  <p>Список задач пуст</p>
  <?php else: ?>
     <?php foreach ($list as $val): ?>
    <tr>
      <th scope="row"><?php echo htmlspecialchars($val['id'], ENT_QUOTES); ?></th>
      <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
      <td><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></td>
      <td><?php echo htmlspecialchars($val['text'], ENT_QUOTES); ?></td>
      <td><?php echo htmlspecialchars($val['action'], ENT_QUOTES); ?><br /><?php echo htmlspecialchars($val['ad'], ENT_QUOTES); ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="clearfix">
    
                    <?php echo $pagination; ?>
                </div>
                <?php endif; ?>
</div>
  

<div class="container">
  <a href="/task" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Добавить задачу</a>
</div>
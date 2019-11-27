<div class="header-h1">
  <h1>Задачи</h1>
</div>
<div class="container">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Имя</th>
      <th scope="col">E-mail</th>
      <th scope="col">Описание</th>
      <th scope="col">Статус</th>
      <th scope="col">Редактировать</th>
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
      <td><?php echo htmlspecialchars($val['action'], ENT_QUOTES); ?> <br /><?php echo htmlspecialchars($val['ad'], ENT_QUOTES); ?></td>
      <td> <a href="/admin/edit/<?php echo $val['id']; ?>"><img src="/public/images/edit.png" alt=""></a> <a href="/admin/delete/<?php echo $val['id']; ?>"><img src="/public/images/del.png" alt=""></a> </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
                <?php endif; ?>
</div>
  
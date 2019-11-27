    <br />
    <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/edit/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Имя</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?>" name="email">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <textarea class="form-control" rows="3" name="text"><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></textarea>
                                 <textarea  class="form-control" rows="3" name="ad"><?php echo htmlspecialchars($dat['text'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Статус</label>
                                    <select name="action" type="text" class="form-control">
                                        <option selected><?php echo htmlspecialchars($data['action'], ENT_QUOTES); ?> </option>
                                        <option><?php echo $data["action"] == "Выполнено" ? "Не выполнено" : "Выполнено" ?></option>
                                    </select> 
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  

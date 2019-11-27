<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;

class MainController extends Controller {

	public function indexAction() {
	    
	    $params = false;
	    $pg = '';
        $URIParts = explode('?',$_SERVER['REQUEST_URI']);

        if(isset($URIParts[1])) {
            $GETS = $URIParts[1];
            $GETS = explode('&',$GETS);
            $params = array();
            foreach($GETS as $GET) {
                $vars = explode('=', $GET);
                $params[$vars[0]] = $vars[1];
            }
        }
        if(isset($params['sort']) && isset($params['type'])) {
            $pg = '?sort='.$params['sort'].'&type='.$params['type'];
        }
		$pagination = new Pagination($pg, $this->route, $this->model->taskCount());
		$vars = [
			'pagination' => $pagination->get(),
			'list' => $this->model->postsList($this->route, $params),
		];
		$this->view->render('Главная страница', $vars);
		
	}
}
<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Pagination;
use application\models\Main;

class AdminController extends Controller {

	public function __construct($route) {
		parent::__construct($route);
		$this->view->layout = 'admin';
	}

	public function loginAction() {
		if (isset($_SESSION['admin'])) {
			$this->view->redirect('admin/objective');
		}
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['admin'] = true;
			$this->view->location('admin/objective');
		}
		$this->view->render('Вход');
	}


	public function taskAction() {
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'task')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->taskAdd($_POST);
			$this->view->message('success', 'Задача успешно добавлена');
		}
		$this->view->render('Добавить задачу');
		
	}

	public function editAction() {
		if (!$this->model->isTaskExists($this->route['id'])) {
			$this->view->errorCode(404);
		} 
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'edit')) {
				$this->view->message('error', $this->model->error);
			}
			$this->model->postEdit($_POST, $this->route['id']);
			$this->view->message('success', 'Сохранено');
		}
		$vars = [
			'data' => $this->model->postData($this->route['id'])[0],
			'dat' => $this->model->taskAd($this->route['id'])[0],
		];

		$this->view->render('Редактировать задачу', $vars);
	}



	public function deleteAction() {
		if (!$this->model->isTaskExists($this->route['id'])) {
			$this->view->errorCode(404);
		} 
		$this->model->postDelete($this->route['id']);
		$this->view->redirect('admin/objective');
		
	}

	public function logoutAction() {
		unset($_SESSION['admin']);
		$this->view->redirect('admin/login');
		
	}

		public function objectiveAction() {
			$mainModel = new Main;
			$pagination = new Pagination('', $this->route, $mainModel->taskCount());
			$vars = [
			'pagination' => $pagination->get(),
			'list' => $mainModel->postsList($this->route, ''),
			];
		$this->view->render('Просмотр задач', $vars);
		
	}
}
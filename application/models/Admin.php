<?php

namespace application\models;

use application\core\Model;

class Admin extends Model {
	
	public $error;
	
	public function loginValidate($post) {
		$config = require 'application/config/admin.php';
		if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
			$this->error = 'Логин или пароль указан неверно';
			return false;
		}
		return true;
	}

	public function postValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$emailLen = iconv_strlen($post['email']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 100) {
			$this->error = 'Название должно содержать от 3 до 100 символов';
			return false;
		} elseif ($emailLen < 3 or $emailLen > 100) {
			$this->error = 'Описание должно содержать от 3 до 100 символов';
			return false;
		} elseif ($textLen < 5 or $textLen > 5000) {
			$this->error = 'Текст должнен содержать от 5 до 5000 символов';
			return false;
		}
			return true;
	}

	public function taskAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'email' => $post['email'],
			'text' => $post['text'],
			'action' => 'Не выполнено',
			'ad' => '',
		];
		$this->db->query('INSERT INTO task VALUES (:id, :name, :email, :text, :action, :ad)', $params);
		return $this->db->lastInsertId();
	}

	public function postEdit($post, $id) {
		$params = [
			'id' => $id,
			'name' => $post['name'],
			'email' => $post['email'],
			'text' => $post['text'],
			'action' => $post['action'],
		];

		$ad = iconv_strlen($post['ad']);
		$noad = iconv_strlen($post['text']);

		if ($ad == $noad ) { 
			$this->db->query('UPDATE task SET name = :name, email = :email, text = :text, action = :action WHERE id = :id', $params);
		} else {
			$this->db->query('UPDATE task SET name = :name, email = :email, text = :text, action =:action , ad = "Отредактировано администратором" WHERE id = :id', $params);
		}
		
	}

	public function isTaskExists($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->column('SELECT id FROM task WHERE id = :id', $params);
	}

	public function postDelete($id) {
		$params = [
			'id' => $id,
		];
		$this->db->query('DELETE FROM task WHERE id = :id', $params);
	}

	public function postData($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT * FROM task WHERE id = :id', $params);
	}

	public function taskAd($id) {
		$params = [
			'id' => $id,
		];
		return $this->db->row('SELECT text FROM task WHERE id = :id', $params);
	}


	
}

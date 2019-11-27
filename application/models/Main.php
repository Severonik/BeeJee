<?php

namespace application\models;

use application\core\Model;

class Main extends Model {
	
	public function taskCount() {
		return $this->db->column('SELECT COUNT(id) FROM task');
	}

	public function postsList($route, $gets) {
	    if(isset($route['page'])) $route['page'] = explode('?', $route['page'])[0];
	    $order = 'id';
	    $type = 'ASC';
	    if(isset($gets['sort']) && ($gets['sort'] == 'name' || $gets['sort'] == 'email' || $gets['sort'] == 'action' || $gets['sort'] == 'id')) {
	        $order = $gets['sort'];
	    }
	    if(isset($gets['type']) && ($gets['type'] == 'asc' || $gets['type'] == 'desc')) {
	        $type = $gets['type'];
	    }
		$max = 3;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM task ORDER BY '.$order.' '.$type.' LIMIT :start, :max', $params);
	}
}
<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index', 
	],

	'main/index/{page:.*}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	// AdminController

	'admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],

	'admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'admin/objective' => [
		'controller' => 'admin',
		'action' => 'objective',
	],
	'admin/objective/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'objective',
	],
	'admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	], 
	'task' => [
		'controller' => 'admin',
		'action' => 'task', 
	],


]; 
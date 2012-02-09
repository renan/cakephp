<?php

class DATABASE_CONFIG {

	private $identities = array(
		'mysql' => array(
			'datasource' => 'Database/Mysql',
			'host' => '0.0.0.0',
			'login' => 'travis'
		),
		'pgsql' => array(
			'datasource' => 'Database/Postgres',
			'host' => '127.0.0.1',
			'login' => 'postgres'
		),
		'sqlite' => array(
			'datasource' => 'Database/Sqlite',
			'database' => array(
				'default' => ':memory:',
				'test' => ':memory:',
				'test2' => '/tmp/cakephp_test2.db'
			)
		)
	);

	public $default = array(
		'persistent' => false,
		'host' => '',
		'login' => '',
		'password' => '',
		'database' => 'cakephp_test',
		'prefix' => ''
	);

	public $test = array(
		'persistent' => false,
		'host' => '',
		'login' => '',
		'password' => '',
		'database' => 'cakephp_test',
		'prefix' => ''
	);

	public $test2 = array(
		'persistent' => false,
		'host' => '',
		'login' => '',
		'password' => '',
		'database' => 'cakephp_test2',
		'prefix' => ''
	);

	public function __construct() {
		$db = !empty($_SERVER['DB']) ? $_SERVER['DB'] : 'mysql';
		foreach (array('default', 'test', 'test2') as $source) {
			$config = array_merge($this->{$source}, $this->identities[$db]);
			if (is_array($config['database'])) {
				$config['database'] = $config['database'][$source];
			}

			$this->{$source} = $config;
		}
	}
}

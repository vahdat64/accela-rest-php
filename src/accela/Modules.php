<?php

require_once('AccelaBase.php');

class Modules extends AccelaBase {

	public function __construct($app_id, $app_secret, $access_token, $environment="Test", $agency=null) {
		parent::__construct($app_id, $app_secret, $access_token, $environment, $agency);
	}
	public function getModules($path, $auth_type, Array $params) {
		return parent::sendRequest($path, $params, $auth_type, $debug=false, $exceptions=true);
	}
	public function __destruct() {
		parent::__destruct();
	}

}
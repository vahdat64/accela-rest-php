<?php

require_once('AccelaBase.php');

class Owners extends AccelaBase {

	public function __construct($app_id, $app_secret, $access_token, $environment="Test", $agency=null, $endpoint=null) {
		parent::__construct($app_id, $app_secret, $access_token, $environment, $agency);
	}
	public function searchOwners($path, $auth_type, Array $params) {
		return parent::sendRequest($path, $params, $auth_type);
	}
	public function getOwner($path, $auth_type, Array $params=[]) {
		return parent::sendRequest($path, $params, $auth_type);
	}
	public function __destruct() {
		parent::__destruct();
	}

}
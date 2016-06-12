<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require dirname(__FILE__).'/../src/ValidatePassword.php';

class ValidatePasswordTest extends PHPUnit_Framework_TestCase{

	public function testValidLength(){
		$valPass = new ValidatePassword();
		$this->assertFalse($valPass->validLength('1234'));
	}
}
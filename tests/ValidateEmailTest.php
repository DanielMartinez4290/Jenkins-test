<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require dirname(__FILE__).'/../src/ValidateEmail.php';

class ValidateEmailTest extends PHPUnit_Framework_TestCase{

	public function testValidEmail(){
		$valPass = new ValidateEmail();
		$this->assertTrue($valPass->validEmail('dmartinez4290@gmail.com'));
		$this->assertFalse($valPass->validEmail('dmartinez4290@gmail.'));
		$this->assertFalse($valPass->validEmail('dmartinez4290gmail.com'));
	}

	public function testValidTese(){
		$valPass = new ValidateEmail();
		$this->assertTrue($valPass->validTest());
	}

	
	
}
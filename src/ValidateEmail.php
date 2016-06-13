<?php

class ValidateEmail{
	

	public function validEmail($email){


		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
		     $emailErr = "You Entered An Invalid Email Format"; 
		     return false;
		}
		else{
			return true;
		}

		
	}


	public function validTest(){
		return true;
	}

}
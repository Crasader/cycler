<?php

namespace App;

use Illuminate\Validation\Validator;

trait ModelValidation{



	protected $rules = array();
	

	protected $errors = array();


	public function rules(){

		return $this->rules;
	}



	public function fill($data,$validate = false){

		
		if($validate && !$this->validate($data)){
			return false;
		}

		return parent::fill($data);
	}


	public function validate($data = array()){

		$v = Validator::make($data,$this->rules);


		if($v->fails()){
			$this->errors = $v->errors();
			return false;
		}

		return true;
	}





	public function errors(){
		return $this->errors;
	}




	public function hasErrors(){
		return count($this->errors) && 1;
	}

}
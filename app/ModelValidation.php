<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Validator;

class ModelValidation extends Model{



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
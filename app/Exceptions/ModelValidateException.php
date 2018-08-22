<?php

namespace App\Exceptions;

use App\Models\ModelValidation;

class ModelValidateException extends \Exception{

	protected $model;
	protected $statusCode;

	public function __construct($model, $message = "Invalid attributes", $code = 400){

		$this->model = $model;
		$this->statusCode = $code;

		parent::__construct($message, $code);
	}




	public function getErrors(){
		return $this->model->errors();
	}

	public function getStatusCode(){
		return $this->statusCode;
	}
}
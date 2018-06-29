<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class ApiHelper{

	const QueryField_Rules = "rules"; // правила фильтрации
	const QueryField_Include = "include"; // включить поля
	const QueryField_Exclude = "exclude"; // исключить поля
	const QueryField_Limit = "limit"; // лимит записей на страницу
	const QueryField_Page = "page"; // переход на страницу 
	const QueryField_Group = "group"; // группировка
	const QueryField_Index = "index"; // выдать как ассоциативный массив по указанному ключу
	const QueryField_Order = "order"; // сортировка


	protected static $condOperators = [
		"equal" => "=",
		"!equal" => "<>",
		"more" => ">",
		"!more" => "<=",
		"less" => "<",
		"!less" => ">=",
		"more~equal" => ">=",
		"!more~equal"=> "<",
		"less~equal" => "<=",
		"!less~equal" => ">",
		"like" => "LIKE",
		"!like" => "NOT LIKE",

		"in" => "IN",
		"!in" => "NOT IN"
	];




	protected $include = array();

	

	public function getInclude(){
		return $this->include;
	}

	


	public function setInclude(array $include)
    {
        $this->include = $include;

        return $this;
    }





	protected $exclude = array();


	public function getExclude(){
		return $this->exclude;
	}

	public function setExclude(array $exclude)
    {
        $this->exclude = $exclude;

        return $this;
    }


	public function parseRequest(Request $req){
		$query = $req->all();
		
		$this->setExclude(isset($query['exclude']) && is_array($query['exclude']) ? $query['exclude'] : array());


		$this->setInclude(isset($query['include']) && is_array($query['include']) ? $query['include'] : array());
		
	}
}
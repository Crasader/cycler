<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelValidation;

class ApiHelper{

	const QueryField_Rules 		= "rules";   // правила фильтрации
	const QueryField_Include	= "include"; // включить поля
	const QueryField_Exclude	= "exclude"; // исключить поля
	const QueryField_Limit 		= "limit";   // лимит записей на страницу
	const QueryField_Page  		= "page";    // переход на страницу 
	const QueryField_Group		= "group";   // группировка
	const QueryField_Index 		= "index";   // выдать как ассоциативный массив по указанному ключу
	const QueryField_Order 		= "order";   // сортировка
	

	protected static $condOperators = [
		"equal" 		=> "=",
		"!equal" 		=> "<>",
		"more" 			=> ">",
		"!more" 		=> "<=",
		"less" 			=> "<",
		"!less"		 	=> ">=",
		"more~equal" 	=> ">=",
		"!more~equal"	=> "<",
		"less~equal" 	=> "<=",
		"!less~equal" 	=> ">",
		"like" 			=> "LIKE",
		"!like" 		=> "NOT LIKE",
		"in" 			=> "IN",
		"!in" 			=> "NOT IN",
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





	public function getByRequest(ModelValidation $model, $params = array()){

		 
		$this->setExclude(isset($params[self::QueryField_Exclude]) && is_array($params[self::QueryField_Exclude]) ? $params[self::QueryField_Exclude] : array());

		$this->setInclude(isset($params[self::QueryField_Include]) && is_array($params[self::QueryField_Include]) ? $params[self::QueryField_Include] : array());
		
		$select = array_diff($model->getVisible(),$this->exclude);
		
		

		$canIncluded = array_intersect($model->getAvailable(),$this->include);
		
		$select = array_unique(array_merge($select,$canIncluded));

		
		$q = DB::table($model->getTable());
		$q->select(count($select) ? $select : ['*']);

		//Group
		if(isset($params[self::QueryField_Group])){
			//Фильтрация значения
			$g = $params[self::QueryField_Group];
			$q->groupBy($g);
		}


		//Order
		if(isset($params[self::QueryField_Order])){
			//Фильтрация значения
			$o = $params[self::QueryField_Order];
			$q->orderBy($o,'desc');
		}


		//Limit
		if(isset($params[self::QueryField_Limit])){
			//Фильтрация значения
			$l = $params[self::QueryField_Limit];
			
			$offset = isset($params[self::QueryField_Page]) && (int)$params[self::QueryField_Page] ? (int)$params[self::QueryField_Page] * $l - $l : null;
			
			if($offset){
				$q->offset($offset);
			}

			$q->limit($l);
		}


		if(isset($params[self::QueryField_Rules]) && is_array($params[self::QueryField_Rules])){
			foreach ($params[self::QueryField_Rules] as $property => $rule) {
				
				if(is_array($rule) && count($rule)){
					
					foreach ($rule as $cond => $value) {
						//$cond = key($rule);

						//Проверка на содержания ~ в начале
						if(substr($cond, 0,1) === '~'){
							$cond_key = substr($cond, 1);
							if(array_key_exists($cond_key, self::$condOperators)){
								
								if($cond_key == "in" || $cond_key == "!in"){
									$q->orWhereRaw($property." ".self::$condOperators[$cond_key]. " (".$value.")");
								}else{
									$q->orWhere($property,self::$condOperators[$cond_key],$value);
								}
							}

						}elseif(array_key_exists($cond, self::$condOperators)){
							
							if($cond == "in" || $cond == "!in"){
								$q->whereRaw($property." ".self::$condOperators[$cond]. " (".$value.")");
							}else{
								$q->where($property,self::$condOperators[$cond],$value);
							}
						}
					}
					
				}

			}
		}


		$data = $q->get()->toArray();
		$result = [];
		
		if(isset($params[self::QueryField_Index]) && in_array($params[self::QueryField_Index], $select)){
			foreach ($data as $r) {
				$key = $r->{$params[self::QueryField_Index]};
				$result[$key] = $r;
				
			}
		}else{
			$result = $data;
		}

		return $result;
	}
}
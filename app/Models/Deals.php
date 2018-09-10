<?php 
namespace App\Models;


class Deals extends ModelValidation
{
	use DynamicalModel;

	


	public function fill(array $data,$validate = false){

        
        parent::fill($data,$validate);
        
        $id = $this->{$this->getKeyName()};
        if(!$id){
       	 	$this->dts_created = date("Y-m-d\TH:i:s",time());
        }
        $this->dts_updated = date("Y-m-d\TH:i:s",time());

        return $this;
    }
}
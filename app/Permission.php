<?php 
namespace App;

use Zizaco\Entrust\Contracts\EntrustPermissionInterface;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;
use Illuminate\Support\Facades\Config;
use App\Models\ModelValidation;




class Permission extends ModelValidation implements EntrustPermissionInterface
{	
	use EntrustPermissionTrait;


	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;




    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('entrust.permissions_table');
    }



	protected $hidden = ['pivot'];
}
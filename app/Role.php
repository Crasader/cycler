<?php 
namespace App;

use Zizaco\Entrust\Contracts\EntrustRoleInterface;
use Zizaco\Entrust\Traits\EntrustRoleTrait;
use Illuminate\Support\Facades\Config;
use App\Models\ModelValidation;

class Role extends ModelValidation implements EntrustRoleInterface
{
	use EntrustRoleTrait;



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
        $this->table = Config::get('entrust.roles_table');
    }


	protected $hidden = ['pivot'];
}
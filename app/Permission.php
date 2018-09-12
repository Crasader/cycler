<?php 
namespace App;

use Zizaco\Entrust\Contracts\EntrustPermissionInterface;
use Zizaco\Entrust\Traits\EntrustPermissionTrait;
use Illuminate\Support\Facades\Config;
use App\Models\ModelValidation;
use Illuminate\Support\Facades\DB;



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



    protected $rules = array(
        'name'=>['required','unique:permissions,name,id'],
        'display_name'=>['required'],
    );




    protected $fillable = [
        'name',
        'display_name',
        'description',
    ];




    public function fill(array $data,$validate = false){

        
        parent::fill($data);
            
        $this->is_system = 0;
        $id = $this->{$this->getKeyName()};
        if($id){
            $rule['name'] = ['required','unique:permissions,name,'.$id];
            $this->rules = array_merge($this->rules,$rule);
        }

        if($validate && !$this->validate($this->getAttributes())){
            return false;
        }

        return $this;
    }



    public static function getPermissionsIdsByRoleId($roleId){

        $perms = DB::table(Config::get('entrust.permission_role_table'))->where("role_id",$roleId)->get(['permission_id'])->toArray();
        // $perms = self::query()
        //             ->leftJoin(Config::get('entrust.permission_role_table'),Config::get('entrust.permissions_table').'.id','=',Config::get('entrust.permission_role_table').'.permission_id')
        //             ->where(Config::get('entrust.permission_role_table').'.role_id',$roleId)
        //             ->get([Config::get('entrust.permissions_table').'.id']);


        return array_map(function($p){return $p['permission_id'];}, json_decode(json_encode($perms), true));
    }
}
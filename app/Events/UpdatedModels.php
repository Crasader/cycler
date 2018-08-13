<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Database\Eloquent\Model;

class UpdatedModels
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    

    const DELETED = "deleted";
    const UPDATED = "updated";
    const CREATED = "created";
    

    protected static $actions = array(
        self::CREATED,
        self::UPDATED,
        self::DELETED
    );

    public $model;
    protected $action;




    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Model $model,$action = "created")
    {
        $this->model = $model;
        $this->action = in_array($action,self::$actions) ? $action : self::CREATED ;
    }




    public function getAction(){
        return $this->action;
    }
}

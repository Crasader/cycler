<?php

namespace App\Listeners;

use App\Events\UpdatedModels as eUpdatedModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\AppEvents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UpdatedModels
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UpdateCurrencies  $event
     * @return void
     */
    public function handle(eUpdatedModels $event)
    {
        $model = $event->model;
        $user = \Auth::user();

        $data = [
            'table'=>$model->getTable(),
            'row_id'=>$model->{$model->getKeyName()},
            'fields'=>$model->toJson(),
            'user_id'=>$user->id,
            'action'=>$event->getAction()
        ];

        $event = new AppEvents;
        // Log::info("Activated Event model updated", $data);

        if($event->fill($data,true)){
            $event->save();
        }
    }
}

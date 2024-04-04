<?php

namespace App\Services\User;

use App\Services\Api\Escort\ProfileIsCompletedOrNotService;

class UserTypeService{

    public function checkRole($role_id){

        $profileIsCompletedOrNot=(new ProfileIsCompletedOrNotService())->isCompletedOrNot();
        $completed=$profileIsCompletedOrNot->completed ?? null;
        if($role_id===1){
            return to_route('admin.dashboard');
        }else if($role_id===3){
            return to_route('db.customer.index');
        }
        else if($role_id===2){
            return to_route('db.escort.index');
        }
    }
}

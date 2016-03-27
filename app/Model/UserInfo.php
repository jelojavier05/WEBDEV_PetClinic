<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $dates = ['deleted_at'];
    protected $table = 'tbluserinfo';
    protected $primaryKey = 'intUserInfoID';
    public $timestamps = false;
    
    public function User(){
        return $this->hasOne('App\Model\User', 'intUserID', 'intUserID');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $dates = ['deleted_at'];
    protected $table = 'tbluser';
    protected $primaryKey = 'intUserID';
    public $timestamps = false;
    
    public function UserInfo()
    {
        return $this->belongsTo('App\Model\UserInfo', 'intUserID', 'intUserID');
    }
    
    public function User(){
        return $this->hasMany('App\Model\Pet', 'intUserID', 'intUserID');
    }
    
    public function Appointment()
    {
        return $this->belongsTo('App\Model\Appointment', 'intUserID', 'intUserID');
    }
}

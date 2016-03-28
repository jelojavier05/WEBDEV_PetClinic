<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'tblappointment';
    protected $primaryKey = 'intAppointmentID';
    public $timestamps = false;
    
    public function User(){
        return $this->hasOne('App\Model\User', 'intUserID', 'intUserID');
    }
    
    public function Pet(){
        return $this->hasOne('App\Model\Pet', 'intPetID', 'intPetID');
    }
}

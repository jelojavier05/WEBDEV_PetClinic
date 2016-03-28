<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $dates = ['deleted_at'];
    protected $table = 'tblPet';
    protected $primaryKey = 'intPetID';
    public $timestamps = false;
    
    public function User()
    {
        return $this->belongsTo('App\Model\User', 'intUserID', 'intUserID');
    }
    
    public function Animal(){
        return $this->hasone('App\Model\Animal', 'intAnimalID', 'intAnimalID');
    }
    
    public function Breed(){
        return $this->hasone('App\Model\Breed', 'intBreedID', 'intBreedID');
    }
    
     public function Appointment()
    {
        return $this->belongsTo('App\Model\Appointment', 'intPetID', 'intPetID');
    }
}

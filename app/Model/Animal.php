<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'tblanimal';
    protected $primaryKey = 'intAnimalID';
    public $timestamps = false;
    
    public function Breed()
    {
        return $this->belongsTo('App\Model\Breed', 'intAnimalID', 'intAnimalID');
    }
}

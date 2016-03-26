<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model
{
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'tblbreed';
    protected $primaryKey = 'intBreedID';
    public $timestamps = false;
    
    public function Animal(){
        return $this->hasOne('App\Model\Animal');
    }
}

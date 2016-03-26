<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class GroomService extends Model
{
    
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'tblgroomservice';
    protected $primaryKey = 'intGroomServiceID';
    public $timestamps = false;
}

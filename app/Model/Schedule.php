<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    
    use SoftDeletes;
	protected $dates = ['deleted_at'];
    protected $table = 'tblschedule';
    protected $primaryKey = 'intScheduleID';
    public $timestamps = false;
}

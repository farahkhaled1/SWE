<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
    protected $table="courses";
    // protected $primaryKey = 'code';
    // protected $fillable=["code","title","semester","programme","department_offering","department_teaching","year","level","approval_date","credit_hours","practical","lectures","total","Prerequisite","coordinator_id","assistant"];
}

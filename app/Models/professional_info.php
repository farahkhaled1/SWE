<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professional_info extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'professional_info';
    protected $fillable = ['id','form_id','aims'];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ku extends Model
{

    protected $fillable = ['content', 'type', ' specs(form)_id'];

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = json_encode($value);
    }

    public function getContentAttribute($value)
    {
        return $this->attributes['content'] = json_decode($value);
    }
}

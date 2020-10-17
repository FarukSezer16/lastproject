<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'text', 'photo', 'created_by', 'updated_by', 'deleted_by'
    ];
    public function user()
    {
        return $this->hasMany('App\User','id','created_by');
    }
}

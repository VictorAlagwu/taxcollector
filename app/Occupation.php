<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    //
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{

    protected $guarded = [];

    public function pot()
    {
        return $this->belongsTo(Pot::class);
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{

    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'pot_user')
            ->withPivot('total_contributed', 'last_contribution')
            ->withTimestamps();
    }

    public function contributions()
    {
        return $this->hasMany(Contribution::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

}

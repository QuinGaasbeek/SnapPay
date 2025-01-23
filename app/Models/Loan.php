<?php

namespace App\Models;

use App\Enums\LoanStatusses;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    protected $guarded = [];

    protected $casts = [
        'status' => LoanStatusses::class,
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function loaner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'loaner_id');
    }
}

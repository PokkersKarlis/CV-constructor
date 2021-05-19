<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'country',
        'city',
        'street',
        'house_number',
        'flat_number',
        'home_name',
        'postal_code'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

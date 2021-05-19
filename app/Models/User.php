<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'phone',
        'email'
    ];

    public function educations(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function address() :HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function experience(): HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function customData(): HasMany
    {
        return $this->hasMany(CustomData::class);
    }
}

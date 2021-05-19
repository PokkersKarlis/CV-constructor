<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'user_id',
        'school',
        'school_level',
        'school_status',
        'school_startTime',
        'school_endTime',
    ];

    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

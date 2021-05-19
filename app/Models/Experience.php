<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Experience extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'company',
        'position',
        'stack',
        'job_start_date',
        'job_end_date',
        'description',
        'job_condition'
    ];

    public function user (): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

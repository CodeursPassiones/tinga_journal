<?php

namespace App\Models;

use App\Traits\InsensitiveLike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Volume extends Model
{
    use HasFactory;
    use InsensitiveLike;
    protected $fillable = [
        'title',
        'description',
        'year',
        'journal_id',
    ];

    public function journal(): BelongsTo
    {
        return $this->belongsTo(Journal::class);
    }

    public function issues(): HasMany
    {
        return $this->hasMany(Issue::class);
    }
}

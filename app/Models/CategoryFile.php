<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'journal_id',
    ];

    public function journal(): BelongsTo
    {
        return $this->belongsTo(Journal::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }
}

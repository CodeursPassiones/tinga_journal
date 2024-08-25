<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Social extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
        'target_url',
        'logo_path',
        'website_id',
    ];

    public function website(): BelongsTo
    {
        return $this->belongsTo(Journal::class);
    }
}

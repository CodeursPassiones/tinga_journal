<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;

class Social extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
        'target_url',
        'logo_path',
        'website_id',
    ];

    public function website(): BelongsTO
    {
        return $this->belongsTo(Journal::class);
    }
}

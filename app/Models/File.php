<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'mime_type',
        'path',
        'url',
        'name',
        'description',
        'article_id',
    ];

    public function article(): BelongsTO
    {
        return $this->belongsTo(Article::class);
    }
}

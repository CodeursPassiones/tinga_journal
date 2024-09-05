<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'category_file_id',
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function categoryFile(): BelongsTo
    {
        return $this->belongsTo(CategoryFile::class);
    }
}

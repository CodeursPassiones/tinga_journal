<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract',
        'content',
        'status',
        'image_url',
        'publication_date',
        'issue_id',
        'discipline_id',
        'user_id',
    ];

    public function issue(): BelongsTo
    {
        return $this->belongsTo(Issue::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function discipline(): BelongsTo
    {
        return $this->belongsTo(Discipline::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function articleAuthor(): HasMany
    {
        return $this->hasMany(ArticleAuthor::class);
    }
}

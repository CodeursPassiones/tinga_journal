<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTO;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract',
        'content',
        'status',
        'iùage_url',
        'publivation_date',
        'issue_id',
        'discipline_id',
    ];

    public function issue(): BelongsTO
    {
        return $this->belongsTo(Issue::class);
    }

    public function discipline(): BelongsTO
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

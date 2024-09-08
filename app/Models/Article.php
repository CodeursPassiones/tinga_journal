<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract',
        'content',
        'status',
        'image_path',
        'publication_date',
        'issue_id',
        'discipline_id',
        'user_id',
        'subtitle',
        'references',
        'keywords',
        'prefix',
        'comment',
        'doi',
        'matricule',
        'state',
        'en_abstract',
        'citation',
    ];
    protected $casts = [
        'publication_date' => 'datetime',
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

    public function articleUsers(): HasMany
    {
        return $this->hasMany(ArticleUser::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Obtenir le plus grand ID actuel dans la table
            $maxId = static::max('id');

            // Incrémenter cet ID pour obtenir le prochain ID disponible
            $nextId = $maxId + 1;

            $model->matricule = 'TINGA'.$model->issue_id.$nextId;
        });
    }
}

<?php

namespace App\Models;

use App\Traits\InsensitiveLike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Issue extends Model
{
    use HasFactory;
    use InsensitiveLike;
    protected $fillable = [
        'number',
        'publication_date',
        'title',
        'volume_id',
        'description',
    ];

    // protected $casts = [
    //     'publication_date' => 'date',
    // ];
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    // protected $dateFormat = 'Y-m-d';

    public function volume(): BelongsTo
    {
        return $this->belongsTo(Volume::class);
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Obtenir le plus grand ID actuel dans la table
            $maxId = static::max('id');

            // Incrémenter cet ID pour obtenir le prochain ID disponible
            $nextId = $maxId + 1;

            // Utiliser le nouvel ID pour l'insertion
            $model->number = $nextId;
        });
    }
}

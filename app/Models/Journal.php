<?php

namespace App\Models;

use App\Traits\InsensitiveLike;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Journal extends Model
{
    use HasFactory;
    use InsensitiveLike;
    protected $fillable = [
        'title',
        'description',
        'issn',
        'logo_path',
    ];

    public function website(): HasOne
    {
        return $this->hasOne(Website::class);
    }

    public function volumes(): HasMany
    {
        return $this->hasMany(Volume::class);
    }

    public function disciplines(): HasMany
    {
        return $this->hasMany(Discipline::class);
    }
}

<?php

namespace App\Traits;

trait InsensitiveLike
{
    /**
     * Scope pour une recherche insensible à la casse selon la base de données.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string                                $column
     * @param string                                $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeInsensitiveLike($query, $column, $value)
    {
        $driver = \DB::getDriverName();

        if ($driver == 'pgsql') {
            // Pour PostgreSQL, utiliser ILIKE
            return $query->where($column, 'ILIKE', "%{$value}%");
        }

        // Pour MySQL ou autres, LIKE est déjà insensible à la casse par défaut
        // return $query->where($column, 'LIKE', "%{$value}%");

        return $query->whereRaw("LOWER($column) LIKE LOWER(?)", ["%{$value}%"]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{

    protected $table = 'cities';

    protected $fillable = [
        'CityName'
    ];

    /**
     * Get all of the comments for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function CollectionCenter(): HasMany
    {
        return $this->hasMany(CollectionCenter::class, 'cities_id');
    }

    /**
     * Get all of the comments for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'cities_id');
    }
}

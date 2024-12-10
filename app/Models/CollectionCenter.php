<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CollectionCenter extends Model
{

    protected $table = 'collectioncenters';

    protected $fillable = [
        'name', 'address', 'photo' ,'contact_number', 'operating_hours', 'cities_id'
    ];

    /**
     * Get the user that owns the CollectionCenter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function City(): BelongsTo
    {
        return $this->belongsTo(City::class, 'cities_id');
    }

    /**
     * Get all of the comments for the CollectionCenter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Ewaste(): HasMany
    {
        return $this->hasMany(EWaste::class, 'collectioncenters_id');
    }
}

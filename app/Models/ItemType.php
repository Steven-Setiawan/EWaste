<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ItemType extends Model
{

    protected $table = 'itemtype';

    protected $fillable = [
        'TypeName'
    ];

    /**
     * Get the user that owns the ItemType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function EWaste(): BelongsTo
    {
        return $this->belongsTo(EWaste::class, 'itemtype_id');
    }

}

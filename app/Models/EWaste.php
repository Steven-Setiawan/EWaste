<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EWaste extends Model
{

    protected $table = 'ewasteorders';

    protected $fillable = [
        'user_id', 'collectioncenters_id', 'item_name', 'itemtype_id', 'description', 'image_url', 'status'
    ];

    /**
     * Get the user that owns the EWaste
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ItemType(): BelongsTo
    {
        return $this->belongsTo(ItemType::class, 'itemtype_id');
    }

    /**
     * Get the user that owns the EWaste
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function CollectionCenter(): BelongsTo
    {
        return $this->belongsTo(CollectionCenter::class, 'collectioncenters_id');
    }

    /**
     * Get the user that owns the EWaste
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}

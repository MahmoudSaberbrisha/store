<?php

namespace app\Models\Stocks\Items;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class StoreAllItemsPrices extends Model
{
    protected $table = 'store_all_items_prices';

    protected $fillable = [
        'publisher',
        'publisher_name',
        'sanf_code',
        'sanf_name',
        'date_ar',
        'update_time',
        'new_price',
        'old_price'
    ];

    protected $casts = [
        'publisher' => 'integer',
        'new_price' => 'decimal:0',
        'old_price' => 'decimal:0',
    ];

    public $timestamps = false;

    /**
     * Get the user that owns the publisher.
     */
    public function publisher()
    {
        return $this->belongsTo(User::class, 'publisher');
    }
}

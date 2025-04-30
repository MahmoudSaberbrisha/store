<?php

namespace app\Models\Stocks\Purchase;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Other\StoreOtherSupplier;
use App\Models\User;

class StoreReturnPurchase extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_return_purchases';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fatora_code_purchases',
        'total_price',
        'date',
        'date_ar',
        'publisher',
        'publisher_name',
        'supplier_code'
    ];

    protected $casts = [
        'fatora_code_purchases' => 'integer',
        'total_price' => 'double',
        'publisher' => 'integer',
        'supplier_code' => 'integer',
    ];

    /**
     * Get the supplier associated with the return purchase.
     */
    public function supplier()
    {
        return $this->belongsTo(StoreOtherSupplier::class, 'supplier_code', 'code');
    }

    /**
     * Get the publisher user associated with the return purchase.
     */
    public function publisherUser()
    {
        return $this->belongsTo(User::class, 'publisher');
    }
}

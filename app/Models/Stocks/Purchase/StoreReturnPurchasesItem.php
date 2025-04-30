<?php

namespace app\Models\Stocks\Purchase;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Items\StoreItem;
use app\Models\Stocks\Purchase\StoreReturnPurchase;
use app\Models\Stocks\Setting\StoreBranchSetting;
use app\Models\Stocks\Other\StoreOtherSupplier;

class StoreReturnPurchasesItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_return_purchases_item';

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
        'return_purchases_id',
        'item_code',
        'item_name',
        'one_price_buy',
        'return_amount',
        'price_return_amount',
        'date',
        'date_ar',
        'publisher',
        'publisher_name',
        'sub_branch_id_fk',
        'supplier_code',
    ];

    public function returnPurchase()
    {
        return $this->belongsTo(StoreReturnPurchase::class, 'return_purchases_id');
    }

    public function item()
    {
        return $this->belongsTo(StoreItem::class, 'item_code', 'sanf_code');
    }

    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch_id_fk');
    }

    public function supplier()
    {
        return $this->belongsTo(StoreOtherSupplier::class, 'supplier_code', 'code');
    }
}

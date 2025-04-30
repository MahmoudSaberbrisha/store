<?php

namespace app\Models\Stocks\Purchase;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;
use app\Models\Stocks\Other\StoreOtherSupplier;
use app\Models\Stocks\Items\StoreItem;

class StorePurchase extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_purchases';

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
        'marge3_num',
        'main_branch_id_fk',
        'sub_branch_id_fk',
        'sarf_rkm',
        'fatora_code',
        'fatora_date',
        'supplier_code',
        'product_code',
        'amount_buy',
        'all_cost_buy',
        'one_price_sell',
        'date',
        'date_s',
        'publisher',
        'sarf_far3_pill_num',
        'old',
    ];

    public function mainBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'main_branch_id_fk');
    }

    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch_id_fk');
    }

    public function supplier()
    {
        return $this->belongsTo(StoreOtherSupplier::class, 'supplier_code', 'code');
    }

    public function product()
    {
        return $this->belongsTo(StoreItem::class, 'product_code', 'sanf_code');
    }
}

<?php

namespace app\Models\Stocks\Items;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;

class StoreStartOtherItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_start_other_items';

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
        'main_branch',
        'sub_branch',
        'pill',
        'sanf_code',
        'available_amount',
        'one_buy_cost',
        'amount',
        'date',
        'date_s',
        'old',
    ];

    protected $casts = [
        'main_branch' => 'integer',
        'sub_branch' => 'integer',
        'pill' => 'integer',
        'one_buy_cost' => 'decimal:2',
        'date' => 'date',
        'old' => 'boolean',
    ];

    /**
     * Get the main branch associated with the item.
     */
    public function mainBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'main_branch');
    }

    /**
     * Get the sub branch associated with the item.
     */
    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch');
    }
}

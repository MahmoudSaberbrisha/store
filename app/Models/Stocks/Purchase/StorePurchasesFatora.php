<?php

namespace app\Models\Stocks\Purchase;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;

class StorePurchasesFatora extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_purchases_fatora';

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
        'main_branch_id_fk',
        'sub_branch_id_fk',
        'fatora_date',
        'supplier_code',
        'fatora_cost_before_discount',
        'discount',
        'fatora_cost_after_discount',
        'paid_type',
        'box_name',
        'paid',
        'remain',
        'byan',
        'date',
        'date_s',
        'publisher',
        'had_back',
        'sarf_far3_pill_num'
    ];

    protected $casts = [
        'main_branch_id_fk' => 'integer',
        'sub_branch_id_fk' => 'integer',
        'paid_type' => 'integer',
        'box_name' => 'integer',
        'date' => 'integer',
        'date_s' => 'integer',
        'had_back' => 'integer',
    ];

    /**
     * Get the main branch associated with the fatora.
     */
    public function mainBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'main_branch_id_fk');
    }

    /**
     * Get the sub branch associated with the fatora.
     */
    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch_id_fk');
    }
}

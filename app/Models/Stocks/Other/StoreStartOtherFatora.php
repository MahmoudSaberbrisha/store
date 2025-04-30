<?php

namespace App\Models\Stocks\Other;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;

class StoreStartOtherFatora extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_start_other_fatora';

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
        'pill_num',
        'all_amount',
        'all_cost',
    ];

    protected $casts = [
        'main_branch' => 'integer',
        'sub_branch' => 'integer',
        'all_cost' => 'decimal:2',
    ];

    /**
     * Get the main branch associated with the fatora.
     */
    public function mainBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'main_branch');
    }

    /**
     * Get the sub branch associated with the fatora.
     */
    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch');
    }
}

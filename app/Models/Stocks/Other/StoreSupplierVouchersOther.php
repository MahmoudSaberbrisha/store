<?php

namespace app\Models\Stocks\Other;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;
use app\Models\Stocks\Other\StoreOtherSupplier;

class StoreSupplierVouchersOther extends Model
{
    protected $table = 'store_supplier_vouchers_other';

    protected $fillable = [
        'main_branch_id_fk',
        'sub_branch_id_fk',
        'safe_id_fk',
        'supplier_code',
        'total',
        'paid',
        'remain',
        'date',
        'date_s',
        'publisher',
    ];

    protected $casts = [
        'main_branch_id_fk' => 'integer',
        'sub_branch_id_fk' => 'integer',
        'safe_id_fk' => 'integer',
        'supplier_code' => 'integer',
        'total' => 'decimal:2',
        'paid' => 'decimal:2',
        'remain' => 'decimal:2',
        'date' => 'integer',
        'date_s' => 'integer',
        'publisher' => 'integer',
    ];

    public $timestamps = false;

    /**
     * Get the main branch associated with the voucher.
     */
    public function mainBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'main_branch_id_fk');
    }

    /**
     * Get the sub branch associated with the voucher.
     */
    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch_id_fk');
    }

    /**
     * Get the supplier associated with the voucher.
     */
    public function supplier()
    {
        return $this->belongsTo(StoreOtherSupplier::class, 'supplier_code', 'code');
    }
}

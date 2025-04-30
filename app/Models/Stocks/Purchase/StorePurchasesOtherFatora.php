<?php

namespace app\Models\Stocks\Purchase;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;
use app\Models\Stocks\Khazina\StoreKhazina;
use app\Models\Stocks\Other\StoreOtherStorage;
use app\Models\Stocks\Other\StoreOtherSupplier;
use App\Models\User;

class StorePurchasesOtherFatora extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_purchases_other_fatora';

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
        'fatora_code',
        'fatora_date',
        'fatora_print_date',
        'supplier_code',
        'barcode',
        'box_id_fk',
        'box_name',
        'storage_id_fk',
        'storage_name',
        'fatora_cost_before_discount',
        'discount',
        'fatora_cost_after_discount',
        'paid_type',
        'dayen',
        'paid',
        'remain',
        'sheek_num',
        'sheek_status',
        'sheek_value',
        'recived_date',
        'accept_date',
        'byan',
        'marge3_num',
        'date_s',
        'date_ar',
        'publisher',
        'deport',
        'had_back',
        'had_back_reason',
        'had_back_date',
        'had_back_date_s',
        'had_back_value',
        'type',
    ];

    public function mainBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'main_branch_id_fk');
    }

    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch_id_fk');
    }

    public function box()
    {
        return $this->belongsTo(StoreKhazina::class, 'box_id_fk');
    }

    public function storage()
    {
        return $this->belongsTo(StoreOtherStorage::class, 'storage_id_fk');
    }

    public function supplier()
    {
        return $this->belongsTo(StoreOtherSupplier::class, 'supplier_code', 'code');
    }

    public function publisherUser()
    {
        return $this->belongsTo(User::class, 'publisher');
    }
}

<?php

namespace app\Models\Stocks\Rasid;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;
use app\Models\Stocks\Items\StoreItem;
use App\Models\User;

class StoreRasidAyniBar extends Model
{
    protected $table = 'store_rasid_ayni_bar';

    protected $fillable = [
        'main_branch_id_fk',
        'sub_branch_id_fk',
        'date',
        'date_ar',
        'publisher_name',
        'publisher',
        'sanf_code',
        'sanf_id',
        'sanf_name',
        'sanf_amount'
    ];

    public $timestamps = false;

    public function mainBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'main_branch_id_fk');
    }

    public function subBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'sub_branch_id_fk');
    }

    public function publisherUser()
    {
        return $this->belongsTo(User::class, 'publisher');
    }

    public function item()
    {
        return $this->belongsTo(StoreItem::class, 'sanf_code', 'sanf_code');
    }
}

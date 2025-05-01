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

    // Validation rules for create and update
    public static function validationRules($update = false, $id = null)
    {
        $rules = [
            'field1' => $update ? 'sometimes|required|string' : 'required|string',
            'field2' => 'nullable|integer',
        ];

        return $rules;
    }

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

    // Example business logic method: calculate total amount or other relevant calculations
    public function calculateTotalAmount()
    {
        // Placeholder for actual calculation logic
        return $this->sanf_amount; // Example: just returning the amount for now
    }
}

<?php

namespace App\Models\Stocks\Other;

use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Setting\StoreBranchSetting;

class StoreOtherStorage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_other_storage';

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
        'title',
        'from_id_fk'
    ];

    public function fromBranch()
    {
        return $this->belongsTo(StoreBranchSetting::class, 'from_id_fk');
    }
}

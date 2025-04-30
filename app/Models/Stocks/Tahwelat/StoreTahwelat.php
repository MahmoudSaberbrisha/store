<?php

namespace App\Models\Stocks\Tahwelat;


use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Other\StoreOtherStorage;

class StoreTahwelat extends Model
{
    protected $table = 'store_tahwelat';

    protected $fillable = [
        'rkm',
        'order_date',
        'order_date_ar',
        'order_time',
        'from_storage',
        'to_storage',
        'reason',
        'publisher',
        'publisher_name',
        'from_storage_n',
        'to_storage_n'
    ];

    protected $casts = [
        'rkm' => 'integer',
        'order_date' => 'integer',
        'from_storage' => 'integer',
        'to_storage' => 'integer',
    ];

    public $timestamps = false;

    /**
     * Get the from storage associated with the record.
     */
    public function fromStorage()
    {
        return $this->belongsTo(StoreOtherStorage::class, 'from_storage');
    }

    /**
     * Get the to storage associated with the record.
     */
    public function toStorage()
    {
        return $this->belongsTo(StoreOtherStorage::class, 'to_storage');
    }
}

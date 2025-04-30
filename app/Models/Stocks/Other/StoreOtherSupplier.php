<?php

namespace App\Models\Stocks\Other;

use Illuminate\Database\Eloquent\Model;

class StoreOtherSupplier extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'store_other_suppliers';

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
        'code',
        'name',
        'supplier_address',
        'supplier_phone',
        'supplier_fax',
        'accountant_name',
        'accountant_telephone',
        'supplier_dayen'
    ];

    protected $casts = [
        'code' => 'integer',
        'supplier_dayen' => 'decimal:2',
    ];
}

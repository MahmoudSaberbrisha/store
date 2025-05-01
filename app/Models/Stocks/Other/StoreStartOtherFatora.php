<?php

namespace App\Models\Stocks\Other;

use Illuminate\Database\Eloquent\Model;

class StoreStartOtherFatora extends Model
{
    public $timestamps = false;

    protected $table = 'store_start_other_fatora';

    protected $fillable = [
        'main_branch',
        'sub_branch',
        'pill_num',
        'all_amount',
        'all_cost',
    ];
}
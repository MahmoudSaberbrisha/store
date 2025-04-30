<?php

namespace app\Models\Stocks\Inveentory;


use Illuminate\Database\Eloquent\Model;
use app\Models\Stocks\Items\StoreItem;
use app\Models\Employee;
use App\Models\User;

class StoreInventoryTable extends Model
{
    protected $table = 'store_inventory_table';

    protected $fillable = [
        'item_id_fk',
        'storage_id_fk',
        'amount',
        'num_invent',
        'available_amount',
        'invent_date',
        'sanf_type_gym',
        'employee_id_fk',
        'date',
        'date_s',
        'date_ar',
        'publisher',
        'sub_branch_id_fk',
        'emp_code',
        'user_id',
        'deficit_amount',
        'increase_amount',
        'notes',
    ];

    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo(StoreItem::class, 'item_id_fk');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id_fk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

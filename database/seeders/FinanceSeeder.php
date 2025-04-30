<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceSeeder extends Seeder
{
    public function run()
    {
        // Insert data into dalel table
        DB::table('dalel')->insert([
            ['id' => 1, 'parent' => 0, 'parent_code' => 0, 'ttype' => 'أصول', 'code' => 1, 'name' => 'الأصول', 'level' => 1, 'hesab_no3' => 1, 'hesab_tabe3a' => 1, 'hesab_report' => 1, 'last_value' => '0', 'markz_tklfa' => 2],
            // Add other rows as per the SQL dump...
        ]);

        // Insert data into finance_quods table
        DB::table('finance_quods')->insert([
            ['id' => 1, 'rkm' => 1, 'no3_qued' => 2, 'no3_qued_name' => 'قيد يومية', 'halet_qued' => 1, 'halet_qued_name' => 'تمت المراجعة', 'qued_date' => '1675112400', 'qued_date_ar' => '2023-01-31', 'total_value' => 118028.00, 'date' => '2023-03-08', 'date_s' => '1678224015', 'publisher' => '124', 'publisher_name' => 'Ahmed.Okda', 'deport' => 1, 'deport_date_s' => '1680210000', 'deport_date_ar' => '2023-03-31', 'deport_date' => '2023-03-31', 'deport_publisher_id' => '124', 'deport_publisher_name' => 'Ahmed.Okda', 'status' => 0, 'cancel' => 'no', 'cancel_reason' => NULL],
            // Add other rows as per the SQL dump...
        ]);

        // Continue for other tables...
    }
}
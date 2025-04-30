<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSupplierVouchersOtherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_supplier_vouchers_other');

        Schema::create('store_supplier_vouchers_other', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->unsignedInteger('main_branch_id_fk');
            $table->unsignedInteger('sub_branch_id_fk');
            $table->integer('safe_id_fk')->default(0);
            $table->unsignedInteger('supplier_code');
            $table->decimal('total', 19, 2);
            $table->decimal('paid', 19, 2);
            $table->decimal('remain', 19, 2);
            $table->integer('date');
            $table->integer('date_s');
            $table->integer('publisher');

            // Foreign key constraints
            $table->foreign('main_branch_id_fk')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('sub_branch_id_fk')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('supplier_code')->references('code')->on('store_other_suppliers')->onDelete('cascade');
            // Skipping FK for safe_id_fk due to default 0 and unclear reference
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_supplier_vouchers_other');
    }
}

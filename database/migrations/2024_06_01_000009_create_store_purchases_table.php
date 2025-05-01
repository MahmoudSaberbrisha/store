<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_purchases');

        Schema::create('store_purchases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->integer('marge3_num');
            $table->unsignedInteger('main_branch_id_fk');
            $table->unsignedInteger('sub_branch_id_fk');
            $table->integer('sarf_rkm')->nullable();
            $table->string('fatora_code', 15);
            $table->integer('fatora_date');
            $table->string('supplier_code', 15)->default('0');
            $table->string('product_code', 15);
            $table->float('amount_buy');
            $table->decimal('all_cost_buy', 19, 2);
            $table->decimal('one_price_sell', 19, 2);
            $table->date('date');
            $table->date('date_s');
            $table->integer('publisher');
            $table->string('sarf_far3_pill_num', 15);
            $table->boolean('old')->default(false);

            // Foreign key constraints
            $table->foreign('main_branch_id_fk')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('sub_branch_id_fk')->references('id')->on('store_branch_settings')->onDelete('cascade');
            // Skipping FK for supplier_code and product_code due to type mismatch and lack of primary key references
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_purchases');
    }
}

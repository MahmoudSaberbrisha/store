<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreReturnPurchasesItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_return_purchases_item');

        Schema::create('store_return_purchases_item', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->unsignedInteger('return_purchases_id')->nullable();
            $table->string('item_code', 50);
            $table->string('item_name', 15)->nullable();
            $table->double('one_price_buy')->nullable();
            $table->integer('return_amount')->nullable();
            $table->double('price_return_amount')->nullable();
            $table->string('date', 15)->nullable();
            $table->string('date_ar', 15)->nullable();
            $table->unsignedInteger('publisher')->nullable();
            $table->string('publisher_name', 15)->nullable();
            $table->unsignedInteger('sub_branch_id_fk');
            $table->unsignedInteger('supplier_code');

            // Foreign key constraints
            $table->foreign('return_purchases_id')->references('id')->on('store_return_purchases')->onDelete('cascade');
            $table->foreign('item_code')->references('sanf_code')->on('store_item')->onDelete('cascade');
            $table->foreign('sub_branch_id_fk')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('supplier_code')->references('code')->on('store_other_suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_return_purchases_item');
    }
}

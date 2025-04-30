<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreReturnPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_return_purchases');

        Schema::create('store_return_purchases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->integer('fatora_code_purchases')->nullable();
            $table->double('total_price')->nullable();
            $table->string('date', 15)->nullable();
            $table->string('date_ar', 15)->nullable();
            $table->unsignedInteger('publisher')->nullable();
            $table->string('publisher_name', 15)->nullable();
            $table->unsignedInteger('supplier_code');

            // Foreign key constraints
            $table->foreign('supplier_code')->references('code')->on('store_other_suppliers')->onDelete('cascade');
            // FK for fatora_code_purchases skipped due to unclear reference
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_return_purchases');
    }
}

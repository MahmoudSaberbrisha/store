<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreAllItemsPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the table if it exists
        Schema::dropIfExists('store_all_items_prices');

        // Create the table
        Schema::create('store_all_items_prices', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id'); // auto-incrementing primary key
            $table->unsignedBigInteger('publisher')->nullable();
            $table->string('publisher_name', 15)->nullable();
            $table->string('sanf_code', 50)->nullable();
            $table->string('sanf_name', 50)->nullable();
            $table->string('date_ar', 15)->nullable();
            $table->string('update_time', 15)->nullable();
            $table->decimal('new_price', 10, 0)->nullable();
            $table->decimal('old_price', 10, 0)->nullable();

            // Foreign key constraints
            $table->foreign('publisher')->references('id')->on('users')->onDelete('set null');
            // FK for sanf_code skipped due to string type and unclear reference
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_all_items_prices');
    }
}

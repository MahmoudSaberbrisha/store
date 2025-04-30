<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreStartOtherItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_start_other_items');

        Schema::create('store_start_other_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->unsignedInteger('main_branch');
            $table->unsignedInteger('sub_branch');
            $table->integer('pill');
            $table->string('sanf_code', 15)->default('0');
            $table->string('available_amount', 15)->default('0');
            $table->decimal('one_buy_cost', 19, 2)->default(0.00);
            $table->string('amount', 15)->default('0');
            $table->date('date');
            $table->string('date_s', 15)->nullable();
            $table->boolean('old')->default(false);

            // Foreign key constraints
            $table->foreign('main_branch')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('sub_branch')->references('id')->on('store_branch_settings')->onDelete('cascade');
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
        Schema::dropIfExists('store_start_other_items');
    }
}

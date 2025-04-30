<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreStartOtherFatoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_start_other_fatora');

        Schema::create('store_start_other_fatora', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->unsignedInteger('main_branch');
            $table->unsignedInteger('sub_branch');
            $table->string('pill_num', 15);
            $table->string('all_amount', 15);
            $table->decimal('all_cost', 19, 2);

            // Foreign key constraints
            $table->foreign('main_branch')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('sub_branch')->references('id')->on('store_branch_settings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_start_other_fatora');
    }
}

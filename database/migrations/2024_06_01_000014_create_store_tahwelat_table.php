<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTahwelatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_tahwelat');

        Schema::create('store_tahwelat', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->integer('rkm')->nullable();
            $table->integer('order_date')->nullable();
            $table->string('order_date_ar', 50)->nullable();
            $table->string('order_time', 30)->nullable();
            $table->unsignedInteger('from_storage')->nullable();
            $table->unsignedInteger('to_storage')->nullable();
            $table->string('reason', 30)->nullable();
            $table->string('publisher', 20)->nullable();
            $table->string('publisher_name', 20)->nullable();
            $table->string('from_storage_n', 50)->nullable();
            $table->string('to_storage_n', 50)->nullable();

            // Foreign key constraints
            $table->foreign('from_storage')->references('id')->on('store_other_storage')->onDelete('set null');
            $table->foreign('to_storage')->references('id')->on('store_other_storage')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_tahwelat');
    }
}

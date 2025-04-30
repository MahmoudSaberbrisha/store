<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorePurchasesOtherFatoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('store_purchases_other_fatora');

        Schema::create('store_purchases_other_fatora', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->increments('id');
            $table->unsignedInteger('main_branch_id_fk');
            $table->unsignedInteger('sub_branch_id_fk');
            $table->integer('fatora_code');
            $table->string('fatora_date', 15)->nullable();
            $table->string('fatora_print_date', 20);
            $table->unsignedInteger('supplier_code')->nullable();
            $table->string('barcode', 20)->nullable();
            $table->unsignedInteger('box_id_fk')->nullable();
            $table->string('box_name', 70)->nullable();
            $table->unsignedInteger('storage_id_fk')->nullable();
            $table->string('storage_name', 70)->nullable();
            $table->string('fatora_cost_before_discount', 20);
            $table->string('discount', 20);
            $table->string('fatora_cost_after_discount', 20);
            $table->integer('paid_type');
            $table->string('dayen', 20);
            $table->string('paid', 20);
            $table->string('remain', 20);
            $table->string('sheek_num', 20);
            $table->string('sheek_status', 20)->default('0');
            $table->decimal('sheek_value', 19, 0)->default(0);
            $table->integer('recived_date');
            $table->integer('accept_date')->default(0);
            $table->string('byan', 15);
            $table->integer('marge3_num');
            $table->integer('date_s');
            $table->string('date_ar', 20);
            $table->unsignedBigInteger('publisher')->nullable();
            $table->tinyInteger('deport')->default(0);
            $table->integer('had_back')->default(0);
            $table->string('had_back_reason', 20);
            $table->string('had_back_date', 20);
            $table->string('had_back_date_s', 20);
            $table->string('had_back_value', 20)->default('0');
            $table->tinyInteger('type')->default(0);

            // Foreign key constraints
            $table->foreign('main_branch_id_fk')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('sub_branch_id_fk')->references('id')->on('store_branch_settings')->onDelete('cascade');
            $table->foreign('box_id_fk')->references('id')->on('store_khazina')->onDelete('set null');
            $table->foreign('storage_id_fk')->references('id')->on('store_other_storage')->onDelete('set null');
            $table->foreign('supplier_code')->references('code')->on('store_other_suppliers')->onDelete('set null');
            $table->foreign('publisher')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_purchases_other_fatora');
    }
}

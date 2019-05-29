<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('brandEn');
            $table->integer('brandAr');
            $table->integer('deptAr');
            $table->integer('deptEn');
            $table->integer('proAr');
            $table->integer('proEn');
            $table->integer('stock');
            $table->integer('amount');
            $table->integer('colorAr');
            $table->integer('colorEn');
            $table->text('textAr');
            $table->double('priceA','8','3');
            $table->double('priceB','8','3');
            $table->string('img');
            $table->date('startAt');
            $table->date('endAt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_products');
    }
}

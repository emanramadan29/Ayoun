<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Ship_num');
            $table->string('client');
            $table->string('phone');
            $table->integer('product_num');
            $table->integer('amount');
            $table->string('color');
            $table->string('confirm');
            $table->string('shipping');
            $table->string('notes');
            $table->string('eval');

//            $table->string('colorAr');
//            $table->boolean('confirmAr');
//            $table->boolean('shippingAr');
//            $table->string('notesAr');
//            $table->boolean('evalAr');



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
        Schema::dropIfExists('shipments');
    }
}

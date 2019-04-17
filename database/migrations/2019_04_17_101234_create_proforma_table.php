<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('qty');
            $table->String('particulars');
            $table->integer('unitprice');
            $table->integer('subtotal');
            $table->integer('grand');
            $table->integer('customer');
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
        Schema::dropIfExists('proforma');
    }
}

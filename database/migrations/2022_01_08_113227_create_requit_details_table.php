<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requit_details', function (Blueprint $table) {
            $table->id();
            $table->integer('requisition_id');
            $table->integer('product_id');
            $table->double('product_quantity');
            $table->double('product_price');
            $table->double('subtotal');
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('requit_details');
    }
}

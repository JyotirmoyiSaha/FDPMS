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
            $table->string('user_id');
            $table->string('item_id');
            $table->string('item_name');
            $table->double('item_price');
            $table->double('item_quantity');
            $table->double('item_subtotal');
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

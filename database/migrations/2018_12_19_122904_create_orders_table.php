<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basket_id')->unsigned()->unique();
            $table->decimal('order_sum', 10, 4);
            $table->string('condition',30)->nullable();
            $table->string('address',200)->nullable();
            $table->string('telephone',15)->nullable();
            $table->string('mobil',15)->nullable();
            $table->string('bank',20)->nullable();
            $table->integer('installment')->nullable();
            $table->foreign('basket_id')->references('id')->on('baskets')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}

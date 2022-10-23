<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id')->nullable();
            $table->integer('demand_id')->nullable();
            $table->integer('overseas_agencie_id')->nullable();
            $table->text('sending_date')->nullable();
            $table->text('male')->nullable();
            $table->text('female')->nullable();
            $table->text('remark')->nullable();
            $table->text('user_id')->nullable();
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
        Schema::dropIfExists('sendings');
    }
}

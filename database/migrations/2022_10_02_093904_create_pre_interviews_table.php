<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('demand_id')->nullable();
            $table->text('interview_date')->nullable();
            $table->text('male')->nullable();
            $table->text('female')->nullable();
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
        Schema::dropIfExists('pre_interviews');
    }
}

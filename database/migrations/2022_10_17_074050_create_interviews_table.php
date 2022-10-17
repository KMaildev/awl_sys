<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->text('interview_title')->nullable();
            $table->text('interview_date')->nullable();
            $table->text('male')->nullable();
            $table->text('female')->nullable();
            $table->text('interview_type')->nullable();
            $table->integer('overseas_agencie_id')->nullable();
            $table->integer('demand_id')->nullable();
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
        Schema::dropIfExists('interviews');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer_interviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('demand_id')->nullable();
            $table->text('interview_date')->nullable();
            $table->text('male')->nullable();
            $table->text('female')->nullable();
            $table->integer('overseas_agencie_id')->nullable();
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
        Schema::dropIfExists('employer_interviews');
    }
}

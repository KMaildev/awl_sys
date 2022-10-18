<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovernmentProcessContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('government_process_contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('demand_id')->nullable();
            $table->integer('overseas_agencie_id')->nullable();
            $table->text('thai_date')->nullable();
            $table->text('cabinet_date')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('file_name')->nullable();
            $table->text('file_path')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('government_process_contracts');
    }
}

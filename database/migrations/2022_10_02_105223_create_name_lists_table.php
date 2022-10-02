<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNameListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('name_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pre_interview_id')->nullable();
            $table->integer('demand_id')->nullable();
            $table->integer('overseas_agencie_id')->nullable();

            $table->text('name')->nullable();
            $table->text('gender')->nullable();
            $table->text('nrc')->nullable();
            $table->text('father_name')->nullable();
            $table->text('mother_name')->nullable();
            $table->text('qualification')->nullable();
            $table->text('date_of_birth')->nullable();
            $table->text('native_town')->nullable();
            $table->text('region')->nullable();
            $table->text('come_from_to_interview')->nullable();
            $table->text('expiry_date')->nullable();
            $table->text('slip_date')->nullable();
            $table->text('passport_issue_date')->nullable();
            $table->text('medical_fail')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('passport_number')->nullable();
            $table->text('remark')->nullable();

            $table->text('labour_card_no')->nullable();
            $table->text('issue_of_labour_date')->nullable();

            $table->text('join_date')->nullable();
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
        Schema::dropIfExists('name_lists');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSendingFieldToNameListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('name_lists', function (Blueprint $table) {
            $table->integer('sending_id')->nullable();
            $table->text('sending_submit_date')->nullable();
            $table->text('sending_user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('name_lists', function (Blueprint $table) {
            //
        });
    }
}

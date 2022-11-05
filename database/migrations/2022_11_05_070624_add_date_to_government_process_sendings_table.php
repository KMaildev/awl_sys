<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToGovernmentProcessSendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('government_process_sendings', function (Blueprint $table) {
            $table->text('ygn_to_myawaddy')->nullable();
            $table->text('myawaddy_to_thai')->nullable();
            $table->text('male')->nullable();
            $table->text('female')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('government_process_sendings', function (Blueprint $table) {
            //
        });
    }
}

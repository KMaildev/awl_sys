<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCovidInfoToNameListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('name_lists', function (Blueprint $table) {
            $table->text('covid_vaccine_first_dose')->nullable();
            $table->text('covid_vaccine_second_dose')->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheets', function (Blueprint $table) {
            $table->string('name');
            $table->string('category');
            $table->string('month');
            $table->string('year');
            $table->string('Saturday');
            $table->string('Sunday');
            $table->string('Monday');
            $table->string('Tuesday');
            $table->string('Wednesday');
            $table->string('Thursday');
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
        Schema::dropIfExists('sheets');
    }
}

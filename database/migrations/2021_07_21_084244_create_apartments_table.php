<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->interger('id');
            $table->string('name');
            $table->string('address');
            $table->string('price');
            $table->string('generalInformation');
            $table->string('details');
            $table->string('ava');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}

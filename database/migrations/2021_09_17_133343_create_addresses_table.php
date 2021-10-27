<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('state_id')->constrained();
            $table->foreignId('vibhag_id')->constrained();
            $table->foreignId('zilla_id')->constrained();
            $table->foreignId('city_id')->constrained();
            $table->foreignId('revenue_mandal_id')->constrained();
            $table->foreignId('mandal_id')->constrained();
            $table->foreignId('panchayathi_id')->nullable();
            $table->longText('address')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}

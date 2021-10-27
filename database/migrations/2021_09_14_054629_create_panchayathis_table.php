<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanchayathisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panchayathis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mandal_id')->constrained()->cascadeOnDelete();
            $table->string('Name');
            $table->string('Code')->nullable();
            $table->boolean('Status')->default(true);
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
        Schema::dropIfExists('panchayathis');
    }
}

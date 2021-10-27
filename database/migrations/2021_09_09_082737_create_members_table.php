<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Gender')->nullable();
            $table->string('Age');
            $table->string('Profession')->nullable();
            $table->string('State');
            $table->string('District');
            $table->string('City');
            $table->longText('Address');
            $table->longText('Remarks')->nullable();
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
        Schema::dropIfExists('members');
    }
}

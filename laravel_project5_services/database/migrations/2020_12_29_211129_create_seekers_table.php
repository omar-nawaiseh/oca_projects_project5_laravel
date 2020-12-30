<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->bigIncrements('seeker_id');
            $table->string('seeker_name');
            $table->string('seeker_email')->unique();
            $table->string('seeker_mobile');
            $table->string('seeker_city');
            $table->text('seeker_image')->nullable(); // optional
            $table->string('seeker_password');
            // dont forget repassword
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
        Schema::dropIfExists('seekers');
    }
}

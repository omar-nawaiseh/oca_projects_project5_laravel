<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants',
            function (Blueprint $table) {
            $table->bigIncrements('applicant_id');
            $table->integer("cat_id")->unsigned()->nullable()->index();
            $table->string('applicant_name');
            $table->string('applicant_email')->unique();
            $table->string('applicant_password');
            // dont forget repassword
            $table->text('applicant_image')->nullable(); // optional
            $table->bigInteger('applicant_mobile');
            $table->string('applicant_education');
            $table->text('applicant_education_img');
            $table->string('applicant_subscription_type'); // check button or dropdown list
            $table->string('applicant_about');
            $table->string('applicant_service'); // check button or dropdown list from 3 category
            $table->string('applicant_city');
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
        Schema::dropIfExists('applicants');
    }
}

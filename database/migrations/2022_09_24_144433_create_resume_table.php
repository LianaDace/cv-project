<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('school_name')->nullable();
            $table->string('field_of_study')->nullable();
            $table->string('degree')->nullable();
            $table->dateTime('graduation_start_date')->nullable();
            $table->dateTime('graduation_date')->nullable();
            $table->string('job_title')->nullable();
            $table->string('workplace')->nullable();
            $table->string('occupation')->nullable();
            $table->string('job_description')->nullable();
            $table->string('work_load')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('interests')->nullable();
            $table->longText('about')->nullable();
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
        Schema::dropIfExists('resumas');
    }
};

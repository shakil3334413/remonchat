<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('profile_for');
            $table->string('status');
            $table->string('db');
            $table->string('religion');
            $table->string('tongue');
            $table->string('raasi');
            $table->float('height',5,2);
            $table->float('weight',5,2);
            $table->integer('complexion');
            $table->integer('body_type');
            $table->string('blood');
            $table->string('education');
            $table->text('education_detail');
            $table->string('working_sector')->nullable();
            $table->string('profession')->nullable();
            $table->string('profession_details')->nullable();
            $table->integer('diet');
            $table->integer('smoke');
            $table->integer('drink');
            $table->integer('family_type');
            $table->integer('family_status');
            $table->integer('family_value');
            $table->string('family_origin')->nullable();
            $table->string('father_occup')->nullable();
            $table->string('mother_occup')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('yourself');
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
        Schema::dropIfExists('user_profiles');
    }
}

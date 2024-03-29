<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            // $table->bigIncrements('id');
            // $table->timestamps();
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->boolean('toggle_user');
            $table->string('skill_category', 60);
            $table->string('skill_name', 60);
            $table->float('skill_experience', 3, 1)->nullable();
            $table->float('skill_get', 3, 1)->nullable();
            $table->text('skill_explanation')->nullable();
            $table->text('skill_enthusiasm')->nullable();
            $table->string('skill_area', 60)->nullable();
            $table->string('skill_language', 20)->nullable();
            $table->timestamps();

            $table->string('skill_picture', 255)->nullable();
            $table->boolean('interest01')->nullable();
            $table->boolean('interest02')->nullable();
            $table->boolean('interest03')->nullable();
            $table->boolean('interest04')->nullable();
            $table->boolean('interest05')->nullable();
            $table->boolean('interest06')->nullable();
            $table->boolean('interest07')->nullable();
            $table->boolean('interest08')->nullable();
            $table->boolean('interest09')->nullable();
            $table->boolean('interest10')->nullable();
            $table->boolean('interest11')->nullable();
            $table->boolean('interest12')->nullable();
            $table->boolean('interest13')->nullable();
            $table->boolean('interest14')->nullable();
            $table->boolean('interest15')->nullable();
            $table->boolean('interest16')->nullable();
            $table->boolean('interest17')->nullable();
            $table->boolean('interest18')->nullable();
            $table->boolean('interest19')->nullable();
            $table->boolean('interest20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}

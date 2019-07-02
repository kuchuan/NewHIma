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
            $table->boolean('interest01');
            $table->boolean('interest02');
            $table->boolean('interest03');
            $table->boolean('interest04');
            $table->boolean('interest05');
            $table->boolean('interest06');
            $table->boolean('interest07');
            $table->boolean('interest08');
            $table->boolean('interest09');
            $table->boolean('interest10');
            $table->boolean('interest11');
            $table->boolean('interest12');
            $table->boolean('interest13');
            $table->boolean('interest14');
            $table->boolean('interest15');
            $table->boolean('interest16');
            $table->boolean('interest17');
            $table->boolean('interest18');
            $table->boolean('interest19');
            $table->boolean('interest20');
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

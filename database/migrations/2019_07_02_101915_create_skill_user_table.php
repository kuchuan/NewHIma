<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_user', function (Blueprint $table) {
            // $table->increments('id');
            // $table->timestamps();
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('skill_id');
            $table->timestamps();

            // 外部キー制約
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skill_user');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('主键ID');
            $table->string('name')->comment('食谱名');
            $table->string('cover')->comment('早餐ID');
            $table->integer('breakfast_id')->comment('午餐ID');
            $table->integer('lunch_id')->comment('晚餐ID');
            $table->integer('dinner_id')->comment('步骤');
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
        Schema::dropIfExists('recipes');
    }
}
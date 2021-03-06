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
            $table->integer('price')->comment('套餐价格（分）');
            $table->string('name')->comment('食谱名');
            $table->string('cover')->comment('封面图');
            $table->string('description')->nullable()->comment('描述');
            $table->text('breakfast')->comment('早餐内容');
            $table->text('lunch')->comment('午餐内容');
            $table->text('dinner')->comment('晚餐内容');
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

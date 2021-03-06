<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->date('birthday')->comment('出生日期');
            $table->char('gender')->comment('男：m | 女：f');
            $table->float('weight')->comment('体重/千克');
            $table->integer('height')->comment('身高/厘米');
            $table->integer('exercise')->comment('运动量分级');
            $table->integer('purpose')->comment('控制目的分级');
            $table->integer('habit')->comment('饮食习惯分级')->default(0);
            $table->float('fat')->comment('体脂率')->nullable();
            $table->text('intake')->comment('饮食控制计划')->nullable();
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
        Schema::dropIfExists('healths');
    }
}

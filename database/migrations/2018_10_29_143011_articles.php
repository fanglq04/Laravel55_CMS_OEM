<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->comment('所属分类id');
            $table->string('title')->comment('标题');
            $table->string('source')->nullable()->comment('来源');
            $table->string('thumb')->nullable()->comment('封面');
            $table->text('content')->comment('内容');
            $table->boolean('status')->default(1)->comment('状态');
            $table->boolean('is_top')->default(0)->comment('是否置顶');
            $table->unsignedTinyInteger('sort')->default(99)->comment('排序，从小到大');
            $table->timestamps();

            $table->index('category_id', 'category_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(1)->comment('文章添加者');
            $table->string('title')->default('')->comment('标题');
            $table->integer('cate_id')->default(0)->comment('分类id');
            $table->longText('content')->nullable()->comment('内容');
            $table->timestamps();
            $table->comment('文章表');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

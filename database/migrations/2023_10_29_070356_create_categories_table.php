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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->default(1)->comment('分类添加者');
            $table->string('name')->default('')->comment('分类名称');
            $table->integer('status')->default(1)->comment('状态');
            $table->integer('sort')->default(0)->comment('排序');
            $table->timestamps();
            $table->comment('分类表');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

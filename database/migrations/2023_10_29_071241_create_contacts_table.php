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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('')->comment('名称');
            $table->string('phone')->default('')->comment('电话');
            $table->string('email')->default('')->comment('邮箱');
            $table->text('message')->nullable()->comment('留言信息');
            $table->timestamps();
            $table->comment('留言表');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};

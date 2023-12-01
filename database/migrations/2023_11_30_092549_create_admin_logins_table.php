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
        Schema::create('admin_logins', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->comment('管理员ID');
            $table->string('uri')->comment('操作地址');
            $table->json('params')->default()->comment('内容参数');
            $table->ipAddress()->nullable()->comment('操作ip');
            $table->timestamps();
            $table->comment('管理员日志');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_logins');
    }
};

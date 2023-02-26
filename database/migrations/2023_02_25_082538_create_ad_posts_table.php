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
        Schema::create('ad_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('model_id')->nullable();
            $table->string('title')->nullable();
            $table->string('city')->nullable();
            $table->string('type')->nullable();
            $table->string('company_name')->nullable();
            $table->string('compnay_logo')->nullable();
            $table->string('area_name')->nullable();
            $table->string('description')->nullable();
            $table->string('feature_image')->nullable();
            $table->enum('status',['active','pending','approved'])->default('pending')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_posts');
    }
};

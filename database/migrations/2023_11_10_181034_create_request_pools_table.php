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
        Schema::create('request_pools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pool_id');
            $table->unsignedBigInteger('user_posted_id');
            $table->unsignedBigInteger('user_request_id');
            $table->enum('is_notified', ['true', 'false'])->default('false');
            $table->enum('status', ['approved', 'pending'])->default('pending');
            
            $table->foreign('pool_id')->references('id')->on('created_pools');
            $table->foreign('user_posted_id')->references('id')->on('users');
            $table->foreign('user_request_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_pools');
    }
};

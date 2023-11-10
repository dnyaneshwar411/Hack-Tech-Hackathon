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
        Schema::create('created_pools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('created_by_user_id');
            $table->integer('travellers_already_in_pool');
            $table->integer('total_travellers_required');
            $table->string('city_travelling');
            $table->string('areas_travelling');
            $table->string('starting_journey_from');
            $table->integer('contribution')->nullable();
            $table->string('vehicle');
            $table->timestamp('starting_journey_at')->nullable();
            $table->enum('status',['incomplete','complete'])->default('incomplete');
            $table->integer('interested_travellers')->default(0);
            $table->foreign('created_by_user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('created_pools');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pot_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('goal_id')->nullable();
            $table->decimal('amount', 10, 2);
            $table->decimal('pot_total', 10, 2);
            $table->timestamps();

            $table->foreign('pot_id')->references('id')->on('pots')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('goal_id')->references('id')->on('goals')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};

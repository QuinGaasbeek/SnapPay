<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pot_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pot_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('total_contributed', 10, 2)->default(0.00);
            $table->decimal('last_contribution', 10, 2)->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('pot_id')->references('id')->on('pots')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pot_user');
    }
};

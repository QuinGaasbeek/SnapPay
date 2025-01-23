<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('loaner_id')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('amount', 10, 2);
            $table->enum('period', ['weeks', 'months']);
            $table->integer('period_count');
            $table->decimal('interest_rate', 5, 2)->default(0.00);
            $table->enum('status', ['pending', 'accepted', 'repaid', 'overdue'])->default('pending');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->json('installments')->nullable();
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('loaner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('names', 50);
            $table->string('last_name', 50);
            $table->date('birth_date');
            $table->string('email', 50)->unique();
            $table->string('identification_card', 7);
            $table->double('salary')->unique();
            $table->string('state')->default(true);

            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('must_change_password')->default(true);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

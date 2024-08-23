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
            $table->string('firstname');
            $table->string('lastnaùe');
            $table->string('username');
            $table->date('birthdate');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('country')->default('Togo');
            $table->string('city')->default('Sokodé');
            $table->string('address1')->default('quartier');
            $table->string('address2')->default('quartier');
            $table->string('state')->default('quartier');

            $table->string('phone')->nullable();

            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(Hash::make('secret'));
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

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
            $table->string('lastname');
            $table->string('username')->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->string('country')->default('Togo')->nullable();
            $table->string('city')->default('Sokodé')->nullable();
            $table->string('address1')->default('quartier')->nullable();
            $table->string('address2')->default('quartier')->nullable();
            $table->string('state')->default('quartier')->nullable();
            $table->string('profile_picture')->default('assets/images/user-img.jpg');
            $table->string('phone')->nullable()->nullable();

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

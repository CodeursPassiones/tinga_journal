<?php

use App\Models\Discipline;
use App\Models\Issue;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('abstract');
            $table->text('content');
            $table->string('matricule')->unique();
            $table->enum('status', ['IN_REVIEW', 'PUBLISHED', 'SUBMITTED', 'REJECTED', 'DRAFT', 'ARCHIVED'])->default('DRAFT');
            $table->string('image_path')->default('assets/images/thumbnails/img-02.jpg');
            $table->dateTime('publication_date')->default(now());
            $table->string('keywords')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('references')->nullable();
            $table->string('prefix')->nullable();
            $table->string('doi')->unique()->nullable();
            $table->text('comment')->nullable();
            $table->foreignIdFor(Issue::class);
            $table->foreignIdFor(Discipline::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

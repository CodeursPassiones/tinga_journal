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
            // auto
            $table->id();
            $table->enum('status', ['IN_REVIEW', 'PUBLISHED', 'SUBMITTED', 'REJECTED', 'DRAFT', 'ARCHIVED', 'INCOMING'])->default('DRAFT');
            $table->enum('state', ['INVALID', 'VALID'])->default('INVALID');
            $table->string('image_path')->default('assets/images/thumbnails/img-02.jpg');
            // Metadata

            $table->string('title')->nullable();
            $table->text('abstract')->nullable();
            $table->text('citation')->nullable();
            $table->text('en_abstract')->nullable();
            $table->text('content')->nullable();
            $table->string('keywords')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('references')->nullable();
            $table->string('prefix')->nullable();
            $table->string('doi')->unique()->nullable();
            $table->text('comment')->nullable();
            $table->string('matricule')->unique()->nullable();

            $table->dateTime('publication_date')->useCurrent();
            // Foreign
            $table->foreignIdFor(Issue::class);
            $table->foreignIdFor(Discipline::class)->nullable();
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

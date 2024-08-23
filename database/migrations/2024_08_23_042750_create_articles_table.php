<?php

use App\Models\Discipline;
use App\Models\Issue;
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
            $table->enum('status', ['IN_REVIEW', 'PUBLISHED', 'SUBMITED', 'REJECTED']);
            $table->string('image_url');
            $table->date('publication_date')->default(now());
            $table->foreignIdFor(Issue::class);
            $table->foreignIdFor(Discipline::class);
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

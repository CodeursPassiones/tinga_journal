<?php

use App\Models\User;
use App\Models\Issue;
use App\Models\Discipline;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('image_url')->default('assets/images/editorchoice/img-09.jpg');
            $table->date('publication_date')->default(now());
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

<?php

use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->foreignIdFor(Project::class);

            $table->string('title');
            $table->text('content');
            $table->text('tags');
            $table->string('headers');
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }
};

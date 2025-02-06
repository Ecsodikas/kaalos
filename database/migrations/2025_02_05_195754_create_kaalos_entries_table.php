<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kaalos_entries', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->integer('upvotes');
            $table->integer('downvotes');
            $table->foreignId('user_id');
            $table->text('tags');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaalos_entries');
    }
};

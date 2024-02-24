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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('education_level')->nullable();
            $table->boolean('status')->default(true);
            $table->text('description')->nullable();
            $table->string('Price')->nullable();
            $table->string('frequency')->nullable();
            $table->string('frame')->nullable();
            $table->boolean('Allclasses')->default(false);
            $table->boolean('class1')->default(false);
            $table->boolean('class2')->default(false);
            $table->boolean('class3')->default(false);
            $table->boolean('class4')->default(false);
            $table->boolean('class5')->default(false);
            $table->boolean('class6')->default(false);
            $table->boolean('class7')->default(false);
            $table->boolean('class8')->default(false);
            $table->boolean('class9')->default(false);
            $table->boolean('class10')->default(false);
            $table->boolean('class11')->default(false);
            $table->boolean('class12')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

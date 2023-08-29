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
        Schema::dropIfExists('agenda');
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->integer('group_id');
            $table->string('group_name');
            $table->string('waktu');
            $table->string('tanggal');
            $table->string('kegiatan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};

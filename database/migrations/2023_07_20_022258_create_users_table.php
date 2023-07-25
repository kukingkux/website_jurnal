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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->integer('role_id');
            $table->integer('group_id');
            $table->integer('office_id');
            $table->integer('position_id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('rememter_token')->nullable();
            $table->string('avatar')->nullable();
            $table->string('access_token')->nullable();
            $table->date('birthdate')->nullable();
            $table->char('gender');
            $table->string('phone_number', 20)->nullable();
            $table->text('address');
            $table->text('latest_education')->nullable();
            $table->string('identity_number')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end-date')->nullable();
            $table->integer('status');
            $table->timestamp('last_visit')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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

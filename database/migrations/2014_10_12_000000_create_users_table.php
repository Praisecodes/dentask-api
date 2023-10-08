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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string("password");
            $table->boolean("general_email_notification");
            $table->boolean("new_users_notification");
            $table->boolean("new_tasks_notification");
            $table->text("profile_photo")->nullable();
            // $table->rememberToken();
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

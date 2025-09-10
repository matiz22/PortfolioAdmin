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
        Schema::table('mail_entries', function (Blueprint $table) {
            $table->dropColumn(['to_email', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mail_entries', function (Blueprint $table) {
            $table->string('to_email');
            $table->string('status')->default('pending');
        });
    }
};

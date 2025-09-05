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
        Schema::table('realizations', function (Blueprint $table) {
            $table->renameColumn('thumbnail_url', 'thumbnail');
            $table->renameColumn('client_logo_url', 'client_logo');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('realizations', function (Blueprint $table) {
            $table->renameColumn('thumbnail', 'thumbnail_url');
            $table->renameColumn('client_logo', 'client_logo_url');;
        });
    }
};

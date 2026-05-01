<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('realizations', function (Blueprint $table) {
            $table->string('slug')->nullable();
        });

        DB::table('realizations')->whereNull('slug')->orWhere('slug', '')->update([
            'slug' => DB::raw('CAST(id AS TEXT)'),
        ]);

        Schema::table('realizations', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->change();
        });

        Schema::table('realizations', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('realizations', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }
};

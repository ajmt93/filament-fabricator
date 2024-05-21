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
        Schema::table(config('filament-fabricator.table_name', 'pages'), function (Blueprint $table) {
            $table->dropUnique(['slug', 'parent_id']);
            $table->Unique(['slug', 'parent_id', 'company_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(config('filament-fabricator.table_name', 'pages'), function (Blueprint $table) {
            $table->dropUnique(['slug', 'parent_id', 'company_id']);
            $table->Unique(['slug', 'parent_id']);
        });
    }
};

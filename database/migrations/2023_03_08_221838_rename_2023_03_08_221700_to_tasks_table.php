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
        Schema::table('tasks', function (Blueprint $table) {
          $table->renameColumn('update_at', 'updated_at');
          $table->renameColumn('create_at', 'created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
          
          $table->renameColumn('updated_at', 'update_at');
          $table->renameColumn('created_at', 'create_at');
        });
    }
};

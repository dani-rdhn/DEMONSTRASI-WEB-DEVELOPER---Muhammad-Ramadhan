<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->timestamp('tenggat_waktu')->nullable()->default(Carbon::now('Asia/Jakarta')->addDay());
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->timestamp('tenggat_waktu');
        });
    }
};

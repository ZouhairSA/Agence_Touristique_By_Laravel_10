<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up(): void
    // {
    //     Schema::table('Users', function (Blueprint $table) {
    //         $table->unsignedBigInteger('profil_id')->nullable();
    //         $table->foreign('profil_id')->references('id')->on('profils')->onDelete('cascade');
    //     });
    // }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::table('Users', function (Blueprint $table) {
    //         $table->dropForeign(['profil_id']);
    //         $table->dropColumn('profil_id');
    //     });
    // }
};

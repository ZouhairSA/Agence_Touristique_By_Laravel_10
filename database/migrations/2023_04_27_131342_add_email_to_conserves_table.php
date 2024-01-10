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
        // Schema::table('conserves', function (Blueprint $table) {
        //     $table->string('email')->nullable();
        // });
        Schema::table('conserves', function (Blueprint $table) {
            // Supprimer ou renommer la colonne si nécessaire
            $table->dropColumn('email');
            // ou
            // $table->renameColumn('email', 'nouveau_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('conserves', function (Blueprint $table) {
        $table->dropColumn('email');
    });
}
};

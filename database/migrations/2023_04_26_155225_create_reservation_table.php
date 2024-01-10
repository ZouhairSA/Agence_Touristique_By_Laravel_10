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
        // Supprimez la table reservations si elle existe déjà
        Schema::dropIfExists('reservations');

        // Créez la nouvelle table reservations
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_voyage');
            $table->unsignedBigInteger('id_profil');
            $table->timestamps();

            // Ajoutez d'autres colonnes si nécessaire

            $table->foreign('id_voyage')->references('id')->on('voyages');
            $table->foreign('id_profil')->references('id')->on('profils');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Supprimez la table reservations lors de la réversion
        Schema::dropIfExists('reservations');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use  Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_voyage');
            $table->unsignedBigInteger('id_ville');
            $table->foreign('id_voyage')->references('id')->on('voyages');
            $table->foreign('id_ville')->references('id')->on('villes');
            $table->string('nom_ville');
            $table->string('nom_voyage');
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER `trajet_before_insert` BEFORE INSERT ON `trajets` FOR EACH ROW
        BEGIN
            SET NEW.nom_ville = (SELECT nom FROM villes WHERE id = NEW.id_ville);
            SET NEW.nom_voyage = (SELECT nom FROM voyages WHERE id = NEW.id_voyage);
        END
        ');
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
        DB::unprepared('DROP TRIGGER IF EXISTS `trajet_before_insert`');
    }
};

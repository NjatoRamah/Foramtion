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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenaissance');
            $table->string('email')->unique();
            $table->integer('contact');
            $table->string('sexe');
            
            $table->string('matricule')->unique()->autoincrement();
            $table->string('dateentree');
            $table->string('pdp');
            $table->string('mdp');
            $table->string('postale');
            $table->string('adresse');
            $table->string('ville');
            $table->string('region');
            $table->string('province');
            $table->string('cin');
            $table->string('delivre');
            $table->datetime('datedelivre');
            $table->datetime('dateexpiration' );
            $table->unsignedBigInteger('poste_id');
            $table->foreign('poste_id')
            ->references('id')
            ->on('travailles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
    

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};

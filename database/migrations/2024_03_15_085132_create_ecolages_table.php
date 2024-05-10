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
        Schema::create('ecolages', function (Blueprint $table) {
            $table->id();
            $table->string('prix');
            $table->unsignedBigInteger('id_matieres');
            $table->foreign('id_matieres')
            ->references('id')
            ->on('matieres')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecolages');
    }
};

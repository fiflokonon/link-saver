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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code', 3)->unique(); // Code ISO Alpha-3 (exemple : BEN pour Bénin)
            $table->string('phone_code')->nullable(); // Indicatif téléphonique (exemple : +229 pour Bénin)
            $table->string('currency')->nullable(); // Devise (exemple : XOF pour Franc CFA)
            $table->string('flag')->nullable(); // URL ou chemin vers l'image du drapeau)
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};

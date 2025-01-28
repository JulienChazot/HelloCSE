<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image'); // Stocke le chemin vers l'image
            $table->enum('status', ['inactive', 'pending', 'active'])->default('inactive');
            $table->foreignId('administrator_id')->nullable()->constrained('administrators')->onDelete('set null'); // Clé étrangère vers 'administrators'
            $table->timestamps(); // Ajoute les colonnes 'created_at' et 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}

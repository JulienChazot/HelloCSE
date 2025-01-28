<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // Rendre la colonne 'image' nullable
            $table->string('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // Revenir en arrière et rendre 'image' non nullable
            $table->string('image')->nullable(false)->change();
        });
    }
};

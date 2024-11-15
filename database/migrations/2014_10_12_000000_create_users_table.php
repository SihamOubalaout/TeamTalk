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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('NomEmp')->default('')->nullable;
            $table->string('PrenomEmp')->default('');
            $table->string('poste')->default('');
            $table->string('telephone')->nullable();
            $table->string('adresse')->nullable();
            $table->boolean('isAdmin')->default(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedInteger('id_departement')->nullable();
            $table->foreign('id_departement')->references('id_departement')->on('departements')->onDelete('cascade');
            $table->string('password');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

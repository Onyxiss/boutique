<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Un produit contient un nom de type chaîne max 30 caractères,
     * une description de type texte,
     * une photo de type chaîne,
     * un prix de type décimal,
     * une réduction,
     * une quantité en stock,
     * si il est nouveau ou pas,
     * et une catégorie de type entier qui est une clé étrangère vers la table categories.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->text('description')->nullable();
            $table->string('photo', 255)->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2)->nullable();
            $table->integer('stock_quantity')->default(0);
            $table->boolean('new')->default(false);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

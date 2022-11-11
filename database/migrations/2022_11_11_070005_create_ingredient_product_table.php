<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('ingredient_id');
            $table->string('amount')->nullable(); //Atributo adicional. Cantidad del ingrediente en cada producto
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade'); //Clave externa
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onUpdate('cascade')->onDelete('cascade'); //Clave externa
            $table->unique(['product_id','ingredient_id']); //Clave única, para asegurarnos que no se repite la tupla (product_id, ingredient_id)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_product');
    }
};

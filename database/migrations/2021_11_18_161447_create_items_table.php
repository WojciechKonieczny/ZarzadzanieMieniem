<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('manufacturer_id');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers')->onDelete('no action');

            $table->unsignedBigInteger('model_or_name_id');
            $table->foreign('model_or_name_id')->references('id')->on('model_or_names')->onDelete('no action');
            
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('no action');
            
            $table->timestamps();
            $table->softDeletes(); // dolozenie kolumny `deleted at`, domyslnie jest NULL; gdy go usuwamy, to wkladana jest data; kolumna "ukryta"
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}

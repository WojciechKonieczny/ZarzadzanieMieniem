<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_user', function (Blueprint $table) {
            $table->id(); // traktowany tez jako numer inwentaryzacyjny

            /*
            * klucze obce 
            */
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('no action');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action');
            
            /*
            * pozostale atrybuty
            */
            $table->string('serial_number',12)->nullable();
            $table->date('purcharse_date')->nullable();
            $table->date('warranty_end')->nullable();
            $table->date('assignment_date')->nullable();

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
        Schema::dropIfExists('item_user');
    }
}

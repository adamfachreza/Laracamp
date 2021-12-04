<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp__benefits', function (Blueprint $table) {
            $table->id();

            $table->foreignId('camp_id')->constrained(); // relasi ke tabel camp dengan field id */ note: nama field harus sesuai dengan nama table dan field yg di relasi
            $table->string('name');


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
        Schema::dropIfExists('camp__benefits');
    }
}

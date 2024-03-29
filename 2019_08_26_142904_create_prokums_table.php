<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProkumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prokums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis');
            $table->string('nomor');
            $table->string('judul');
            $table->string('tahun');
            $table->bigInteger('views')->default(0)->unsigned();
            $table->enum("status", ["ACTIVE", "INACTIVE"]);
            $table->string('fileupload');
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
        Schema::dropIfExists('prokums');
    }
}

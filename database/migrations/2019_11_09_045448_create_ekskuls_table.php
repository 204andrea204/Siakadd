<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEkskulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekskuls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sekbid_id')->unsigned();
            $table->string('nama_eks');
            $table->string('nama_pelatih');
            $table->string('visimisi');
            $table->string('jadwal');
            $table->string('foto');
            $table->string('koordinator');
            $table->text('keterangan');
            $table->timestamps();


            $table->foreign("sekbid_id")->references("id")->on("sekbids")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ekskuls');
    }
}

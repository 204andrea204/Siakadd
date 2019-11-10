<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('mapel_id')->unsigned();
            $table->bigInteger('nip');
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->string('lulusan');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tggl_lahir');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign("mapel_id")->references("id")->on("mapels")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}

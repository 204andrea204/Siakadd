<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jurusan_id')->unsigned();
            $table->biginteger('nisn');
            $table->biginteger('nis');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('kelas');
            $table->string('nohp');
            $table->string('tempat_lahir');
            $table->date('tggl_lahir');
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign("jurusan_id")->references("id")->on("jurusans")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}

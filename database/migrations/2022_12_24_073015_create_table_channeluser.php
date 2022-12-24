<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChanneluser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_channeluser', function (Blueprint $table) {
            $table->id();
            $table->string('nomer_pendaftar');
            $table->string('nomer_didaftarkan');
            $table->string('verifikasi');
            $table->string('channel');
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
        Schema::dropIfExists('table_channeluser');
    }
}

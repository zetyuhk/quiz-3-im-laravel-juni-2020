<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAkunsIdToArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artikels', function (Blueprint $table) {
            $table->bigInteger('akun_id')->unsigned()->nullable();
            //$table->integer('akun_id')->unsigned()->nullable();
            $table->foreign('akun_id')->references('id')->on('akuns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikels', function (Blueprint $table) {
            $table->dropForeign(['akun_id']);
            $table->dropColumn('akun_id');
        });
    }
}

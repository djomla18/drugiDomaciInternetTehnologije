<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUtakmica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utakmica', function (Blueprint $table) {
            $table->unsignedBigInteger('stadion_id');
            $table->foreign('stadion_id')->references('id')->on('stadion')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utakmica', function (Blueprint $table) {
            $table->dropForeign('utakmica_stadion_id_foreign');
        });
    }
}

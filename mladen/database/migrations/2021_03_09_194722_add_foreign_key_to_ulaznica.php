<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToUlaznica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ulaznica', function (Blueprint $table) {
            $table->unsignedBigInteger('utakmica_id');
            $table->foreign('utakmica_id')->references('id')->on('utakmica')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ulaznica', function (Blueprint $table) {
            $table->dropForeign('ulaznica_utakmica_id_foreign');
        });
    }
}

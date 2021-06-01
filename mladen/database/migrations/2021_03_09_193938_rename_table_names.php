<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename("ulaznicas", "ulaznica");
        Schema::rename("stadions", "stadion");
        Schema::rename("utakmicas", "utakmica");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename("ulaznica", "ulaznicas");
        Schema::rename("stadion", "stadions");
        Schema::rename("utakmica", "utakmicas");
    }
}

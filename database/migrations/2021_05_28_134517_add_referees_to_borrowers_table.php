<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRefereesToBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('borrowers', function (Blueprint $table) {
            $table->string("ref_name")->nullable();
            $table->string("ref_rel")->nullable();
            $table->string("ref_phone")->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('borrowers', function (Blueprint $table) {
            //
        });
    }
}

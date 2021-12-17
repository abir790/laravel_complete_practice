<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('foods', function (Blueprint $table) {
            $table->unsignedBigInteger('categories_id')->nullable()->after('id');
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->string('location')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('foods', function (Blueprint $table) {
            $table->dropColumn('categories_id');
            $table->dropForeign('categories_id');
            $table->dropColumn('location');
        });

    }
}

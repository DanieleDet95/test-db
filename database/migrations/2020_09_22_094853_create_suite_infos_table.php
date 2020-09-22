<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suite_infos', function (Blueprint $table) {
            $table->id();
            $table->string("address");
            $table->integer("rooms");
            $table->integer("beds");
            $table->integer("baths");
            $table->integer("square_m");
            $table->float("price", 6, 2);
            $table->longText("description");
            $table->unsignedBigInteger("suite_id");
            $table->foreign("suite_id")
                ->references("id")
                ->on("suites");
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
        Schema::dropIfExists('suite_infos');
    }
}

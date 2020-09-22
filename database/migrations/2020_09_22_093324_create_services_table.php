<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->boolean("wifi");
            $table->boolean("pianoforte");
            $table->boolean("pool");
            $table->boolean("sauna");
            $table->boolean("pet");
            $table->boolean("parking");
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
        Schema::dropIfExists('services');
    }
}

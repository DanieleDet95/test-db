<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuiteHighlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suite_highlight', function (Blueprint $table) {
          $table->unsignedBigInteger('suite_id');
          $table->foreign('suite_id')
                ->references('id')
                ->on('suites')
                ->onDelete('cascade');

          $table->unsignedBigInteger('highlight_id');
          $table->foreign('highlight_id')
                ->references('id')
                ->on('highlights')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suite_highlight');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('queue');
            $table->string('priority');
            $table->string('Responsible');
            $table->string('Type');
            $table->string('Lock');
            $table->string('State');
            $table->string('Changed');
            $table->string('StateType');
            $table->integer('QueueID');
            $table->integer('CustomerID');
            $table->integer('OwnerID');
            $table->integer('GroupID');
            $table->multiLineString('Article');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('queues');
    }
}

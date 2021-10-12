<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
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
            $table->string('ticket_id');
            $table->string('title');
            $table->string('queue')->nullable();
            $table->string('priority')->nullable();
            $table->string('responsible')->nullable();
            $table->string('type')->nullable();
            $table->string('lock')->nullable();
            $table->string('state')->nullable();
            $table->string('changed')->nullable();
            $table->string('state_type')->nullable();
            $table->integer('owner_id')->nullable();
            $table->string('age');
            $table->string('ticket_number');
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
        Schema::dropIfExists('tickets');
    }
}

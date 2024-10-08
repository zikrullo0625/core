<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('outgoing_event_id');
            $table->unsignedBigInteger('incoming_event_id');
            $table->timestamps();
            $table->foreign('outgoing_event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('incoming_event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('actions');
    }
}



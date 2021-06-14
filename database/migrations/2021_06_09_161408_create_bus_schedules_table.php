<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {


            $table->id();
            $table->unsignedBigInteger('bus_route_id');
            $table->string('direction');
            $table->time('start');
            $table->time('end');
            $table->timestamps();

            //import id from bus routes table as foreign key
            $table->foreign('bus_route_id')
                ->references('id')
                ->on('bus_routes')
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
        Schema::dropIfExists('bus_schedules');
    }
}

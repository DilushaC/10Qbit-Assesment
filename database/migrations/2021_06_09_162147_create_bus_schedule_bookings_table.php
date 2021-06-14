<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusScheduleBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedule_bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bus_seat_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('bus_schedule_id');
            $table->bigInteger('seat_number');
            $table->bigInteger('price');
            $table->string('status');
            $table->timestamps();

            //import id from bus seats table as foreign key
            $table->foreign('bus_seat_id')
            ->references('id')
            ->on('bus_seats')
            ->onDelete('cascade');

            //import id from users table as foreign key
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            //import id from bus schedules table as foreign key
            $table->foreign('bus_schedule_id')
            ->references('id')
            ->on('bus_schedules')
            ->onDelete('cascade');

            //import seat number from bus seats table as foreign key
            // $table->foreign('seat_number')
            // ->references('seat_number')
            // ->on('bus_seats')
            // ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedule_bookings');
    }
}

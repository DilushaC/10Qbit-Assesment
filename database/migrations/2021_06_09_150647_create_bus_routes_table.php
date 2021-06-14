<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('route_id');
            $table->boolean('status');
            $table->timestamps();

            //import id from bus table as foreign key
            $table->foreign('bus_id')
                ->references('id')
                ->on('bus')
                ->onDelete('cascade');

            //import id from routes table as foreign key
            $table->foreign('route_id')
            ->references('id')
            ->on('routes')
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
        Schema::dropIfExists('bus_routes');
    }
}

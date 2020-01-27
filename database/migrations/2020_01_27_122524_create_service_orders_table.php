<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('report')->nullable();
            $table->string('solution')->nullable();
            $table->date('entry');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->date('exit')->nullable();
            $table->float('value', 8, 2)->nullable();
            $table->boolean('feedback')->nullable();
            $table->enum('status',['entry', 'start','running','stoped','end','exit'])->nullable();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('technician_id');
            $table->unsignedBigInteger('equipment_id');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('technician_id')->references('id')->on('users');
            $table->foreign('equipment_id')->references('id')->on('equipment');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_orders');
    }
}

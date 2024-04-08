<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landrights', function (Blueprint $table) {
            $table->id();
            $table->string('transferorname');
            $table->string('mstatus');
            $table->integer('transferoromang');
            $table->integer('transferortelephone');
            $table->string('transferoraddress');
            $table->string('transferorvillage');
            $table->string('transferordistrict');
            $table->date('transferordate');
            $table->string('plotlocation');
            $table->string('presentuse'); 
            $table->string('leaseduration');
            $table->string('transfereename');
            $table->integer('transfereeomang');
            $table->date('transfereedob');
            $table->integer('transfereetelephone');
            $table->string('transfereeaddress');
            $table->string('transfereevillage');
            $table->string('transfereedistrict');
            $table->date('transfereedate');
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
        Schema::dropIfExists('landrights');
    }
};

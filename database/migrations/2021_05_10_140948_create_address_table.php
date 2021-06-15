<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('speed-popc-fiber-1')->nullable();
            $table->string('speed-popc-fiber-2')->nullable();
            $table->string('speed-popc-fiber-3')->nullable();
            $table->string('speed-popc-fiber-4')->nullable();
            $table->string('speed-popc-fiber-5')->nullable();
            $table->string('price-popc-fiber-1')->nullable();
            $table->string('price-popc-fiber-2')->nullable();
            $table->string('price-popc-fiber-3')->nullable();
            $table->string('price-popc-fiber-4')->nullable();
            $table->string('price-popc-fiber-5')->nullable();
            $table->string('name-popc-fiber-1')->nullable();
            $table->string('name-popc-fiber-2')->nullable();
            $table->string('name-popc-fiber-3')->nullable();
            $table->string('name-popc-fiber-4')->nullable();
            $table->string('name-popc-fiber-5')->nullable();

            $table->string('speed-popc-radio-1')->nullable();
            $table->string('speed-popc-radio-2')->nullable();
            $table->string('speed-popc-radio-3')->nullable();
            $table->string('speed-popc-radio-4')->nullable();
            $table->string('speed-popc-radio-5')->nullable();
            $table->string('price-popc-radio-1')->nullable();
            $table->string('price-popc-radio-2')->nullable();
            $table->string('price-popc-radio-3')->nullable();
            $table->string('price-popc-radio-4')->nullable();
            $table->string('price-popc-radio-5')->nullable();
            $table->string('name-popc-radio-1')->nullable();
            $table->string('name-popc-radio-2')->nullable();
            $table->string('name-popc-radio-3')->nullable();
            $table->string('name-popc-radio-4')->nullable();
            $table->string('name-popc-radio-5')->nullable();

            $table->string('speed-htk-radio-1')->nullable();
            $table->string('speed-htk-radio-2')->nullable();
            $table->string('speed-htk-radio-3')->nullable();
            $table->string('speed-htk-radio-4')->nullable();
            $table->string('speed-htk-radio-5')->nullable();
            $table->string('price-htk-radio-1')->nullable();
            $table->string('price-htk-radio-2')->nullable();
            $table->string('price-htk-radio-3')->nullable();
            $table->string('price-htk-radio-4')->nullable();
            $table->string('price-htk-radio-5')->nullable();
            $table->string('name-htk-radio-1')->nullable();
            $table->string('name-htk-radio-2')->nullable();
            $table->string('name-htk-radio-3')->nullable();
            $table->string('name-htk-radio-4')->nullable();
            $table->string('name-htk-radio-5')->nullable();

            $table->string('speed-htk-fiber-1')->nullable();
            $table->string('speed-htk-fiber-2')->nullable();
            $table->string('speed-htk-fiber-3')->nullable();
            $table->string('speed-htk-fiber-4')->nullable();
            $table->string('speed-htk-fiber-5')->nullable();
            $table->string('price-htk-fiber-1')->nullable();
            $table->string('price-htk-fiber-2')->nullable();
            $table->string('price-htk-fiber-3')->nullable();
            $table->string('price-htk-fiber-4')->nullable();
            $table->string('price-htk-fiber-5')->nullable();
            $table->string('name-htk-fiber-1')->nullable();
            $table->string('name-htk-fiber-2')->nullable();
            $table->string('name-htk-fiber-3')->nullable();
            $table->string('name-htk-fiber-4')->nullable();
            $table->string('name-htk-fiber-5')->nullable();

            $table->string('chanels-dvbc-1')->nullable();
            $table->string('chanels-dvbc-2')->nullable();
            $table->string('chanels-dvbc-3')->nullable();
            $table->string('chanels-dvbc-4')->nullable();
            $table->string('chanels-dvbc-5')->nullable();
            $table->string('price-dvbc-1')->nullable();
            $table->string('price-dvbc-2')->nullable();
            $table->string('price-dvbc-3')->nullable();
            $table->string('price-dvbc-4')->nullable();
            $table->string('price-dvbc-5')->nullable();
            $table->string('name-dvbc-1')->nullable();
            $table->string('name-dvbc-2')->nullable();
            $table->string('name-dvbc-3')->nullable();
            $table->string('name-dvbc-4')->nullable();
            $table->string('name-dvbc-5')->nullable();

            $table->string('chanels-iptv-1')->nullable();
            $table->string('chanels-iptv-2')->nullable();
            $table->string('chanels-iptv-3')->nullable();
            $table->string('chanels-iptv-4')->nullable();
            $table->string('chanels-iptv-5')->nullable();
            $table->string('price-iptv-1')->nullable();
            $table->string('price-iptv-2')->nullable();
            $table->string('price-iptv-3')->nullable();
            $table->string('price-iptv-4')->nullable();
            $table->string('price-iptv-5')->nullable();
            $table->string('name-iptv-1')->nullable();
            $table->string('name-iptv-2')->nullable();
            $table->string('name-iptv-3')->nullable();
            $table->string('name-iptv-4')->nullable();
            $table->string('name-iptv-5')->nullable();
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
        Schema::dropIfExists('address');
    }
}

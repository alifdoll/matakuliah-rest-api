<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Driver\PDOMySql\Driver;

class Schedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->integer('id_schedule');

            $table->string('id');

            $table->string('id_kp');


            $table->string('hari');

            $table->time('waktuMulai', 0);
            $table->time('waktuBerakhir', 0);

            $table->primary(['id_schedule', 'id', 'id_kp', 'hari']);
            $table->unique(['id_schedule', 'id', 'id_kp', 'hari']);
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->integer('id_schedule')->autoIncrement()->change();
            $table->foreign('id_kp')->references('kode')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schedules');
    }
}

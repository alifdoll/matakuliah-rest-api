<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Groups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->string('id_kp');

            $table->string('id_mk');

            $table->string('kode');

            $table->string('kuota');

            $table->primary(['id_kp', 'kode', 'id_mk']);
            $table->unique(['id_kp', 'kode', 'id_mk']);

            $table->foreign('id_mk')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('groups');
    }
}

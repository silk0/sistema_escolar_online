<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
    /*
    
    datos_personales_users
    $table->unsignedBigInteger('users_id')->unique();
    $table->unsignedBigInteger('datos_personales_id')->unique();            
    $table->Integer('estado');
    $table->foreign('users_id')->references('id')->on('users');            
    $table->foreign('datos_personales_id')->references('id')->on('datos_personales');
    
    datos_personales
    $table->binary('foto');
    $table->string('primer_nombre');
    $table->string('segundo_nombre');
    $table->string('tercer_nombre');
    $table->string('primer_apellido');
    $table->string('segundo_apellido');
    $table->string('tercer_apellido');*/
}

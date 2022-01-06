<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpleadoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empleado_rol', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigInteger("empleado_id")->unsigned();
            $table->bigInteger("rol_id")->unsigned();
            
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete("cascade");
            $table->foreign('rol_id')->references('id')->on('roles')->onDelete("cascade");

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
        //
    }
}

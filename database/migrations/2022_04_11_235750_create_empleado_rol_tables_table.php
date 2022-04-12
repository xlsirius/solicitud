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
        Schema::create('empleado_rol_tables', function (Blueprint $table) {
          $table->id();
            //-------------Relacion------------------
           $table->unsignedBigInteger('user_id');
           $table->foreign('user_id')
           ->references('id')->on('users');
           //---------------------------------------
           $table->string('name_rol')->nullable();
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
        Schema::dropIfExists('empleado_rol_tables');
    }
};

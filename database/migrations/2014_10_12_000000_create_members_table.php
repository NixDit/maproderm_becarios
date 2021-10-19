<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('events_id');
            $table->string('name');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('fecha_nacimiento');
            $table->String('whatsapp');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('ciudad');
            $table->string('profesion');
            $table->string('comercializa')->nullable();
            $table->string('info_requiere');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('members');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mis_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('autor', 50);
            $table->string('departamento', 50);
            $table->dateTime('fecha');
            $table->string('clasificacion', 30);
            $table->text('detalles');
            $table->string('estatus');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mis_tickets');
    }
};

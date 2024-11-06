<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampsTable extends Migration
{
    public function up()
    {
        Schema::create('lamps', function (Blueprint $table) {
            $table->id(); // Kolom id (auto increment)
            $table->integer('lamp_number')->unique(); // Nomor lampu
            $table->time('on_time')->nullable(); // Waktu hidup (nullable)
            $table->time('off_time')->nullable(); // Waktu mati (nullable)
            $table->boolean('status')->default(0); // Status lampu (0 = mati, 1 = hidup)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('lamps');
    }
}


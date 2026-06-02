<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('contact');
        $table->date('reservation_date');
        $table->time('reservation_time');
        $table->integer('guests');
        $table->string('status')->default('Pending');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('reservations');
}
};

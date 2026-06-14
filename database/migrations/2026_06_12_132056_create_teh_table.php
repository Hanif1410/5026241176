<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teh', function (Blueprint $table) {
            $table->increments('kodeteh');
            $table->string('merkteh', 30);
            $table->integer('stockteh');
            $table->char('tersedia', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teh');
    }
};

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
        Schema::create('hospital', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->integer('h_id')->length(4)->primary()->unsigned();
		    $table->string('name',50);
		    $table->string('address',60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital');
    }
};

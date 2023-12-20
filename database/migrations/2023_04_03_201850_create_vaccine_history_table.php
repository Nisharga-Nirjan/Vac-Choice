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
        Schema::create('vaccine_history', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->bigInteger('id')->length(20)->unsigned();
            $table->integer('comb_id')->length(4)->unsigned();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('comb_id')->references('comb_id')->on('inventory')->onDelete('cascade')->onUpdate('cascade');
            $table->string('fpayment',10);
            $table->string('fvaccine',20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccine_history');
    }
};

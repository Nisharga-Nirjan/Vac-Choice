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
        Schema::create('inventory', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->integer('comb_id')->length(4)->primary()->unsigned();
            $table->integer('h_id')->length(4)->unsigned();
            $table->string('vac_name',40);
            $table->foreign('vac_name')->references('vac_name')->on('vaccine_price');
            $table->foreign('h_id')->references('h_id')->on('hospital')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date');
            $table->integer('quantity')->length(4)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};

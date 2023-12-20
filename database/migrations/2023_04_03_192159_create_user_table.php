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
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->id();
            $table->string('nid',10);
            $table->foreign('nid')->references('nid')->on('external_db')->onDelete('cascade')->onUpdate('cascade');
            $table->string('email',100);
            $table->string('password',100);
            $table->string('phone',14);
            $table->string('fname',100);
            $table->string('lname',100);
            $table->string('address',60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

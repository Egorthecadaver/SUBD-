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
        Schema::create('rental',function (Blueprint $table){
            $table->id('rentid');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('clientid')->on('userid');
            $table->unsignedBigInteger('id_bicycle');
            $table->foreign('id_bicycle')->references('bicycleid')->on('products');
            $table->date('startdate')->nullable();
            $table->date('finishdate')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental');
    }
};

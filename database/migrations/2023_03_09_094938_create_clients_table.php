<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_name2');
            $table->string('age');
            $table->string('desease');
            $table->string('carelevel');
            $table->foreignId('doctor_id')->constrained();
            $table->foreignId('caremanager_id')->constrained();
            $table->string('treatment_title')->comment('処置');
            $table->string('treatment_content');
            $table->string('treatment_point');
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
        Schema::dropIfExists('clients');
    }
};

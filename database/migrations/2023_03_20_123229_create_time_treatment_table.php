<!-- 処置とタイムスケジュールの中間テーブル -->

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
        Schema::create('time_treatment', function (Blueprint $table) {
            $table->unsignedBigInteger('time_id');
            $table->unsignedBigInteger('treatment_id');
            $table->primary(['time_id', 'treatment_id']);


        // 外部キー制約
        $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade');
        $table->foreign('treatment_id')->references('id')->on('treatments')->onDelete('cascade');

        });
    }

    /**s
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_treatment');
    }
};

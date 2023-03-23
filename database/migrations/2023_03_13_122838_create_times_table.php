<!-- タイムスケジュールテーブル -->

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
        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_id')->constrained();
            $table->time('time');
            $table->string('content');
            $table->boolean('is_move')->default(0);
            $table->string('risk_title1')->nullable();
            $table->string('risk_content1')->nullable();
            $table->string('risk_title2')->nullable();
            $table->string('risk_content2')->nullable();
            $table->string('risk_title3')->nullable();
            $table->string('risk_content3')->nullable();
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
        Schema::dropIfExists('times');
    }
};

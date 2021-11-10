<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSeafoodresto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seafoodresto', function (Blueprint $table) {
            $table->id();
            $table->string('CostumerName');
            $table->string('CostumerAddress');
            $table->string('CostumerOrder');
            $table->BigInteger('TotalAmount');
            $table->BigInteger('AmountPaid');
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
        Schema::dropIfExists('seafoodresto');
    }
}

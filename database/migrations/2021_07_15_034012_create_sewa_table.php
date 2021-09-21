<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->string('acara');
            $table->date('tgl_acara');
            $table->foreignId('member_id');
            $table->foreign('member_id')
                ->references('id')
                ->on('member');
            $table->foreignId('alamat_id');
            $table->foreign('alamat_id')
                ->references('id')
                ->on('alamat');
            $table->string('struk')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('sewa');
    }
}

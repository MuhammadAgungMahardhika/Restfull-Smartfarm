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
        Schema::create('rekap_data_harian', function (Blueprint $table) {
            $table->integer('id_rekap_data_harian');
            $table->integer('id_kandang')->index('id_kandang_rekap_harian');
            $table->timestamp('date')->useCurrentOnUpdate()->useCurrent();
            $table->integer('amoniak');
            $table->integer('suhu');
            $table->integer('kelembapan');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->integer('created_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap_data_harian');
    }
};

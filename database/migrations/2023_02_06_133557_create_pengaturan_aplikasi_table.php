<?php

use Database\Seeders\Pengaturan\AplikasiSeeder;
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
        Schema::create('pengaturan_aplikasi', function (Blueprint $table) {
            $table->id();
            $table->string('key', 50)->nullable();
            $table->text('value')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('jenis', 32)->nullable();
            $table->string('kategori', 32)->nullable();
            $table->string('script', 128)->nullable();
            $table->timestamps();
        });

        $data = new AplikasiSeeder();
        $data->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaturan_aplikasi');
    }
};

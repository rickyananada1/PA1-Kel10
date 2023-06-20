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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masyarakat_id');
            $table->foreign('masyarakat_id')->references('id')->on('masyarakats');
            $table->string('name');
            $table->string('kk');
            $table->string('tempatlahir');
            $table->date('tgllahir');
            $table->string('jeniskelamin');
            $table->string('pekerjaan');
            $table->string('agama');
            $table->string('alamat');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};

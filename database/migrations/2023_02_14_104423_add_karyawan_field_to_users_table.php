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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik');
            $table->text('foto')->default('');
            $table->string('posisi')->default('');
            $table->string('status')->default('');
            $table->string('no_telp')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nik');
            $table->dropColumn('foto');
            $table->dropColumn('posisi');
            $table->dropColumn('status');
            $table->dropColumn('no_telp');
        });
    }
};

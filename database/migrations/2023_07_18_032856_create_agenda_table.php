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
        Schema::dropIfExists('agenda');
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('id');
            // $table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->constrained();

            // $table->unsignedBigInteger('groups_id');
            $table->foreignId('groups_id')->constrained();

            $table->string('name');

            $table->string('group_name');
            $table->string('waktu');
            $table->date('tanggal');
            $table->string('kegiatan');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};

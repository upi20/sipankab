<?php

use App\Models\Portfolio\Kategori;
use App\Models\Portfolio\SubKategori;
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
        Schema::create(SubKategori::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id', false, true)->nullable()->default(null);
            $table->integer('urutan')->nullable()->default(1);
            $table->text('nama')->nullable()->default(null);
            $table->text('judul')->nullable()->default(null);
            $table->text('sub_judul')->nullable()->default(null);
            $table->text('foto')->nullable()->default(null);
            $table->boolean('tampilkan_client')->nullable()->default(false);
            $table->boolean('tampilkan_testimoni')->nullable()->default(false);
            $table->text('slug')->nullable()->default(null)->unique();
            $table->text('keterangan')->nullable()->default(null);
            $table->timestamps();

            $table->foreign('kategori_id')
                ->references('id')->on(Kategori::tableName)
                ->nullOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(SubKategori::tableName);
    }
};

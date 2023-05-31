<?php

use App\Models\Import\Kecamatan as ImportKecamatan;
use App\Models\Kecamatan;
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
        Schema::create(Kecamatan::tableName, function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique()->nullable()->default(null);
            $table->string('nama')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->integer('jml_lulus')->nullable()->default(3);
            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->timestamps();
            $table->foreign('import_id')->references('id')->on(ImportKecamatan::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Kecamatan::tableName);
    }
};

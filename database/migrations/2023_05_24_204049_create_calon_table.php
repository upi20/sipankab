<?php

use App\Models\Calon;
use App\Models\Kecamatan;
use App\Models\Import\Calon as ImportCalon;
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
        Schema::create(Calon::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kecamatan_id', false, true)->nullable()->default(null);
            $table->string('nama')->nullable()->default(null);
            $table->string('nomor_pendaftaran')->unique()->nullable()->default(null);
            $table->string('jenis_kelamin')->nullable()->default(null);
            $table->date('tanggal_lahir')->nullable()->default(null);
            $table->string('nomor_telepon')->nullable()->default(null);
            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->timestamps();

            $table->foreign('kecamatan_id')->references('id')->on(Kecamatan::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('import_id')->references('id')->on(ImportCalon::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Calon::tableName);
    }
};

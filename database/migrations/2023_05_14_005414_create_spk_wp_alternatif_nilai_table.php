<?php

use App\Models\SPK\WP\Alternatif;
use App\Models\SPK\WP\AlternatifNilai;
use App\Models\SPK\WP\Kriteria;
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
        Schema::create(AlternatifNilai::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kriteria_id', false, true)->nullable()->default(null);
            $table->bigInteger('alternatif_id', false, true)->nullable()->default(null);
            $table->double('nilai')->nullable()->default(null);

            $table->timestamps();
            $table->unique(['kriteria_id', 'alternatif_id']);
            $table->foreign('kriteria_id')->references('id')->on(Kriteria::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('alternatif_id')->references('id')->on(Alternatif::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(AlternatifNilai::tableName);
    }
};

<?php

use App\Models\Calon;
use App\Models\CalonNilai;
use App\Models\Tahapan;
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
        Schema::create(CalonNilai::tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tahapan_id', false, true)->nullable()->default(null);
            $table->bigInteger('calon_id', false, true)->nullable()->default(null);
            $table->double('nilai')->nullable()->default(null);

            $table->timestamps();
            $table->unique(['tahapan_id', 'calon_id']);
            $table->foreign('tahapan_id')->references('id')->on(Tahapan::tableName)->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('calon_id')->references('id')->on(Calon::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(CalonNilai::tableName);
    }
};

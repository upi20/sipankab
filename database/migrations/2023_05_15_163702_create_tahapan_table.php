<?php

use App\Models\Import\Tahapan as ImportTahapan;
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
        Schema::create(Tahapan::tableName, function (Blueprint $table) {
            $table->id();
            $table->text('nama')->nullable()->default(null);
            $table->string('kode')->nullable()->default(null);
            $table->double('bobot')->nullable()->default(0);
            $table->bigInteger('import_id', false, true)->nullable()->default(null);
            $table->timestamps();
            $table->foreign('import_id')->references('id')->on(ImportTahapan::tableName)->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Tahapan::tableName);
    }
};
